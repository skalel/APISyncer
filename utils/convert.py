import os
import pandas as pd

def generate_migration_file(table_name, fields):
    migration_content = "<?php\n\nuse Illuminate\Support\Facades\Schema;\nuse Illuminate\Database\Schema\Blueprint;\nuse Illuminate\Database\Migrations\Migration;\n\nclass Create" + table_name.capitalize() + "Table extends Migration\n{\n    /**\n     * Run the migrations.\n     *\n     * @return void\n     */\n    public function up()\n    {\n        Schema::create('" + table_name + "', function (Blueprint $table) {\n"

    model_content = "<?php\n\nnamespace App;\n\nuse Illuminate\Database\Eloquent\Model;\n\nclass " + table_name.capitalize() + " extends Model\n{\n    protected $fillable = [\n"

    for field in fields:
        column_name = field[1]
        pk = field[2]
        data_type = field[3]
        length = field[4]
        decimals = field[5]
        nullable = field[6]
        default_value = field[7]

        # Migration file
        migration_content += "            $table->"
        if data_type.upper() in ["VARCHAR2", "CHAR"]:
            migration_content += "string('" + column_name + "')"
        elif data_type.upper() == "FLOAT" and decimals > 0:
            migration_content += "float('" + column_name + "', " + str(length) + ", " + str(decimals) + ")"
        elif data_type.upper() == "FLOAT" and decimals == 0:
            migration_content += "float('" + column_name + "')"
        elif data_type.upper() == "NUMBER":
            migration_content += "integer('" + column_name + "')"
        elif data_type.upper() in ["CLOB", "BLOB"]:
            migration_content += "text('" + column_name + "')"
        elif data_type.upper() == "DATE":
            migration_content += "datetime('" + column_name + "')"

        if pk > 0:
            migration_content += "->primary()"
        if length > 0:
            migration_content += "->length(" + str(length) + ")"
        if nullable == 'Sim':
            migration_content += "->nullable()"
        if not pd.isna(default_value) and default_value != '':
            migration_content += "->default(" + str(default_value) + ")"

        migration_content += ";\n"

        # Model file
        model_content += "        '" + column_name + "',\n"

    migration_content += "        });\n    }\n\n    /**\n     * Reverse the migrations.\n     *\n     * @return void\n     */\n    public function down()\n    {\n        Schema::dropIfExists('" + table_name + "');\n    }\n}"

    model_content += "    ];\n}"

    migration_file_name = os.path.join(folder_path, table_name + "_migration.php")
    model_file_name = os.path.join(folder_path, table_name + ".php")

    with open(migration_file_name, "w") as migration_file:
        migration_file.write(migration_content)

    with open(model_file_name, "w") as model_file:
        model_file.write(model_content)

def analyze_files(folder_path):
    for file_name in os.listdir(folder_path):
        if file_name.endswith(".xlsx"):
            file_path = os.path.join(folder_path, file_name)
            df = pd.read_excel(file_path)
            table_name = df.iloc[0, 0]
            fields = df.values[1:].tolist()

            generate_migration_file(table_name, fields)

folder_path = input("Digite o caminho da pasta: ")

if not os.path.exists(folder_path):
    os.makedirs(folder_path)

analyze_files(folder_path)
