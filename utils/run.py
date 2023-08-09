import os
from bs4 import BeautifulSoup

def parse_html_file(file_path):
    with open(file_path, 'r', encoding='utf-8') as file:
        soup = BeautifulSoup(file, 'html.parser')
        table_rows = soup.select('table tr')

        table_name = table_rows[1].select_one('td').text.strip()
        field_rows = table_rows[3:]

        migration_commands = []
        primary_keys = []
        for row in field_rows:
            cells = row.select('td')
            if len(cells) == 8:
                field_name = cells[0].text.strip()
                field_type = cells[2].text.strip().upper()
                field_size = cells[3].text.strip()
                field_pk = cells[4].text.strip()
                field_null = cells[5].text.strip()
                field_default = cells[6].text.strip()

                if field_pk:
                    primary_keys.append(field_name)

                if field_type == 'BLOB':
                    field_type = 'binary'
                elif field_type == 'INTEIRO':
                    field_type = 'integer'
                elif field_type == 'DATA/HORA':
                    field_type = 'datetime'
                elif field_type == 'DATA':
                    field_type = 'date'
                elif field_type == 'HORA':
                    field_type = 'time'
                elif field_type == 'STRING':
                    field_type = 'string'

                migration_command = f"$table->{field_type}('{field_name}')"
                if field_size:
                    migration_command += f"->length({field_size})"
                if field_null == 'S':
                    migration_command += '->nullable()'
                if field_default:
                    if field_type == 'STRING':
                        field_default = f"'{field_default}'"
                    elif field_type in ['INTEGER', 'FLOAT']:
                        field_default = f"{field_default}"
                    else:
                        field_default = ''

                    migration_command += f"->default({field_default})"

                migration_commands.append(migration_command + ';')

        if len(primary_keys) > 0:
            primary_keys_str = ', '.join(primary_keys)
            primary_key_command = f"$table->primary([{primary_keys_str}]);"
            migration_commands.insert(0, primary_key_command)

        return table_name, migration_commands


def convert_html_to_migration(directory):
    for file_name in os.listdir(directory):
        if file_name.endswith('.html'):
            file_path = os.path.join(directory, file_name)
            table_name, migration_commands = parse_html_file(file_path)

            output_file_name = f"{table_name}_migration.txt"
            output_file_path = os.path.join(directory, output_file_name)

            with open(output_file_path, 'w') as output_file:
                output_file.write("\n".join(migration_commands))

            print(f"Generated migration file for table '{table_name}': {output_file_name}")


# Exemplo de uso:
directory_path = input("Digite o caminho do diretório: ")
convert_html_to_migration(directory_path)
