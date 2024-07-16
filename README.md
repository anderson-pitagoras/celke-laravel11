
### Como rodar o projeto
    * Criar bd no mysql
    Configure a arquivo .env

    Já veio instalado Composer / Key

### Gerar chave caso precise

    php artisan key:generate
    Preparação do Git e Git Hub

 ## Migration 
    php artisan make:migration create_courses_table
## pastas 
    database / migrations / create_curses_table

## executar as migrations  (rodar no BD )
    php artisan migrate

## Como Criar Rotas 
Arquivos para configurar
-Pastas: Routes/web.php - incluir a configuração do controller e da view
    Route::get('/index-curse', [CourseController::class, 'index']);


## Controller
Commando: php artisan make:controller CourseController
-Pasta App/HTTP/Controllers/CourseController.php
inserir function:
    public function index(){
        return view('courses.index');
    }

## Criar view
Commando: php artisan make:view courses/index


Padrão 
MVC - User -> Controller -> View -> User


### Como criar rotas

### Criar Models
php artisan make:model Course
