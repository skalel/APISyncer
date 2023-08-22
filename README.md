<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the Project

Useful Link: \
[Swagger Sankhya](http://swagger.sankhya.com.br/)\
[Sankhya Developer](https://developer.sankhya.com.br/reference/api-de-integra%C3%A7%C3%B5es-sankhya)

###### **EN**
This project was developed to serve as a intercommunication between the Sankhya ERP API and other softwares, in focus the data fetched from the API needs to be saved on a Database to be utilized/analyzed on MS Power BI, focusing on making the company being able to get Business Intelligence visions to make decisions. Also, is required an interface to send POST requests to another system which make quotations based on the prices of the products that has been sended by the comercial team.

###### **PT_BR**
Este projeto foi desenvolvido para servir como uma intercomunicação entre a API do ERP Sankhya e outros softwares, em foco os dados buscados da API precisam ser salvos em um Banco de Dados para serem utilizados/analisados no MS Power BI, com foco em fazer com que a empresa consiga obter visões de Business Intelligence para a tomada de decisões. Além disso, é necessária uma interface para enviar solicitações de POST para outro sistema que faça cotações com base nos preços dos produtos que foram enviados pela equipe comercial.

### Challenges

- [x] Choose how to deal with the JWT expiration time (30 minutes)
- [x] Ensure that the software will validate and authenticate with the JWT Login API from the ERP even if expired
- [x] Create the tables and models to mirror the internal ERP Database
- [x] Create interface with accessible and simple elements
- [x] Grant that the executions are being really made with a log table
- [x] Serve the Database access to PBI users
- [] Create a function to measure the time on each script execution and break if it is reaching the PHP.ini limit (Temporarily out of scope)
- [x] Create a solution to incremental updates on table (instead of refreshing all database)
- [] Develop the routine to set the values to be send to the third system
- [] Create method to do the data POST to the other system
- [] Validate that the data is correctly send
- [] Create a CRON task to get update from the ERP each 2 hours (between 8-4/8-16)
- [] Optimize the software

### Project Initializing

###### **EN**
The process of choosing which Stack would be the utilized on the project was hard, as you may know, this process is ~~*a hell on earth*~~ complicated if you have not experiences with developing alone. \
The Scaffolding strategy choosen was to utilize Laravel + Breeze with Blade/TailwindCSS templates. I would have used React to develop the front-end. But I needed to make the fastest decision to accelerate the production. ~~maybe in the next version?~~ \
Initially the project was using a MySQL/MariaDB Database, but the .NET Connector from those are not working well on the Windows Client of Power BI. So in the middle of the road I was obligated to change the database to SQL Server, native from ~~*our loved*~~ MS.

###### **PT_BR**
O processo de escolha de qual Stack seria o utilizado no projeto foi difícil, como você deve saber, esse processo é ~~*um inferno na terra*~~ complicado se você não tem experiências em desenvolver sozinho. \
A estratégia de *Scaffolding* escolhida foi utilizar Laravel + Breeze com templates Blade/TailwindCSS. Eu teria usado o React para desenvolver o front-end. Mas eu precisava tomar a decisão mais rápida para acelerar a produção. ~~talvez na próxima versão?~~ \
Inicialmente, o projeto estava usando um banco de dados MySQL/MariaDB, mas o .NET Connector desses não está funcionando bem no cliente Windows do Power BI. Então, no meio do caminho fui obrigado a mudar o banco de dados para SQL Server, nativo de ~~*nossa amada*~~ MS.

### Project setup in Development machine

###### **EN**
To initialize the project you will need to have Composer, NodeJS (LTS) and PHP installed and configured in your PATH. \
You will need to run these commands on the folder of the project: \
\
`composer install` \
\
`npm install` \
\
`npm run build` \
\
`php artisan key:generate` \
\
This way you will be able to initialize the project. A default user was created to grant access. The credentials are: \
`a@a.com` \
`admin1234` \
\
Thats all.

###### **PT_BR**
Para inicializar o projeto você precisará ter o Composer, NodeJS (LTS) e PHP instalados e configurados em seu PATH. \
Você precisará executar esses comandos na pasta do projeto: \
\
`composer install` \
\
`npm install` \
\
`npm run build` \
\
`php artisan key:generate` \
\
Desta forma, você será capaz de inicializar o projeto. Um usuário padrão foi criado para conceder acesso. As credenciais são: \
\
`a@a.com` \
`admin1234` \
\
Só isso.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
