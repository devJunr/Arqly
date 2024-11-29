# LockPassManager

## Descrição
O **LockPassManager** é um gerenciador de senhas seguro e fácil de usar, desenvolvido para ajudar os usuários a armazenar e gerenciar suas senhas de forma eficiente. Com uma interface intuitiva e recursos robustos, ele garante a segurança das suas informações.

## Funcionalidades
- **Armazenamento seguro de senhas**: Guarde suas senhas em um local seguro, protegido contra acessos não autorizados.
- **Geração de senhas fortes**: Crie senhas robustas e difíceis de adivinhar com apenas um clique.
- **Recuperação de senhas**: Recupere facilmente suas senhas caso você as esqueça.
- **Verificação se o email vazou**: Fique informado se seu email foi exposto em vazamentos de dados.
- **Interface amigável**: Navegue pelo aplicativo de maneira fácil e intuitiva, sem complicações.
- **Nada de guardar na nuvem**: Todos os dados são armazenados localmente, garantindo total controle e privacidade das suas informações.

## Tecnologias Utilizadas
- Java
- Spring Boot 
- Banco de dados 
- PHP 
- Laravel
### Para gerenciar dependências: 
- Composer


## Passo-a-passo usado na instalação do laravel
```

   _                               _
  | |                             | |
  | |     __ _ _ __ __ ___   _____| |
  | |    / _` | '__/ _` \ \ / / _ \ |
  | |___| (_| | | | (_| |\ V /  __/ |
  |______\__,_|_|  \__,_| \_/ \___|_|


 ┌ Would you like to install a starter kit? ────────────────────┐
 │ No starter kit                                               │
 └──────────────────────────────────────────────────────────────┘

 ┌ Which testing framework do you prefer? ──────────────────────┐
 │ Pest                                                         │
 └──────────────────────────────────────────────────────────────┘

 ┌ Would you like to initialize a Git repository? ──────────────┐
 │ No                                                           │
 └──────────────────────────────────────────────────────────────┘

Creating a "laravel/laravel" project at "./LockPassManager"
Installing laravel/laravel (v11.3.2)
  - Installing laravel/laravel (v11.3.2): Extracting archive
Created project in /home/junr/Dev/LockPassManager
Loading composer repositories with package information
Updating dependencies
Lock file operations: 107 installs, 0 updates, 0 removals
  - Locking brick/math (0.12.1)
  - Locking carbonphp/carbon-doctrine-types (3.2.0)
  - Locking dflydev/dot-access-data (v3.0.3)
  - Locking doctrine/inflector (2.0.10)
  - Locking doctrine/lexer (3.0.1)
  - Locking dragonmantank/cron-expression (v3.4.0)
  - Locking egulias/email-validator (4.0.2)
  - Locking fakerphp/faker (v1.23.1)
  - Locking filp/whoops (2.16.0)
  - Locking fruitcake/php-cors (v1.3.0)
  - Locking graham-campbell/result-type (v1.1.3)
  - Locking guzzlehttp/guzzle (7.9.2)
  - Locking guzzlehttp/promises (2.0.4)
  - Locking guzzlehttp/psr7 (2.7.0)
  - Locking guzzlehttp/uri-template (v1.0.3)
  - Locking hamcrest/hamcrest-php (v2.0.1)
  - Locking laravel/framework (v11.30.0)
  - Locking laravel/pail (v1.2.0)
  - Locking laravel/pint (v1.18.1)
  - Locking laravel/prompts (v0.3.1)
  - Locking laravel/sail (v1.37.1)
  - Locking laravel/serializable-closure (v1.3.5)
  - Locking laravel/tinker (v2.10.0)
  - Locking league/commonmark (2.5.3)
  - Locking league/config (v1.2.0)
  - Locking league/flysystem (3.29.1)
  - Locking league/flysystem-local (3.29.0)
  - Locking league/mime-type-detection (1.16.0)
  - Locking mockery/mockery (1.6.12)
  - Locking monolog/monolog (3.7.0)
  - Locking myclabs/deep-copy (1.12.0)
  - Locking nesbot/carbon (3.8.1)
  - Locking nette/schema (v1.3.2)
  - Locking nette/utils (v4.0.5)
  - Locking nikic/php-parser (v5.3.1)
  - Locking nunomaduro/collision (v8.5.0)
  - Locking nunomaduro/termwind (v2.2.0)
  - Locking phar-io/manifest (2.0.4)
  - Locking phar-io/version (3.2.1)
  - Locking phpoption/phpoption (1.9.3)
  - Locking phpunit/php-code-coverage (11.0.7)
  - Locking phpunit/php-file-iterator (5.1.0)
  - Locking phpunit/php-invoker (5.0.1)
  - Locking phpunit/php-text-template (4.0.1)
  - Locking phpunit/php-timer (7.0.1)
  - Locking phpunit/phpunit (11.4.3)
  - Locking psr/clock (1.0.0)
  - Locking psr/container (2.0.2)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.3)
  - Locking psr/http-factory (1.1.0)
  - Locking psr/http-message (2.0)
  - Locking psr/log (3.0.2)
  - Locking psr/simple-cache (3.0.0)
  - Locking psy/psysh (v0.12.4)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/collection (2.0.0)
  - Locking ramsey/uuid (4.7.6)
  - Locking sebastian/cli-parser (3.0.2)
  - Locking sebastian/code-unit (3.0.1)
  - Locking sebastian/code-unit-reverse-lookup (4.0.1)
  - Locking sebastian/comparator (6.2.1)
  - Locking sebastian/complexity (4.0.1)
  - Locking sebastian/diff (6.0.2)
  - Locking sebastian/environment (7.2.0)
  - Locking sebastian/exporter (6.1.3)
  - Locking sebastian/global-state (7.0.2)
  - Locking sebastian/lines-of-code (3.0.1)
  - Locking sebastian/object-enumerator (6.0.1)
  - Locking sebastian/object-reflector (4.0.1)
  - Locking sebastian/recursion-context (6.0.2)
  - Locking sebastian/type (5.1.0)
  - Locking sebastian/version (5.0.2)
  - Locking symfony/clock (v7.1.6)
  - Locking symfony/console (v7.1.6)
  - Locking symfony/css-selector (v7.1.6)
  - Locking symfony/deprecation-contracts (v3.5.0)
  - Locking symfony/error-handler (v7.1.6)
  - Locking symfony/event-dispatcher (v7.1.6)
  - Locking symfony/event-dispatcher-contracts (v3.5.0)
  - Locking symfony/finder (v7.1.6)
  - Locking symfony/http-foundation (v7.1.6)
  - Locking symfony/http-kernel (v7.1.6)
  - Locking symfony/mailer (v7.1.6)
  - Locking symfony/mime (v7.1.6)
  - Locking symfony/polyfill-ctype (v1.31.0)
  - Locking symfony/polyfill-intl-grapheme (v1.31.0)
  - Locking symfony/polyfill-intl-idn (v1.31.0)
  - Locking symfony/polyfill-intl-normalizer (v1.31.0)
  - Locking symfony/polyfill-mbstring (v1.31.0)
  - Locking symfony/polyfill-php80 (v1.31.0)
  - Locking symfony/polyfill-php83 (v1.31.0)
  - Locking symfony/polyfill-uuid (v1.31.0)
  - Locking symfony/process (v7.1.6)
  - Locking symfony/routing (v7.1.6)
  - Locking symfony/service-contracts (v3.5.0)
  - Locking symfony/string (v7.1.6)
  - Locking symfony/translation (v7.1.6)
  - Locking symfony/translation-contracts (v3.5.0)
  - Locking symfony/uid (v7.1.6)
  - Locking symfony/var-dumper (v7.1.6)
  - Locking symfony/yaml (v7.1.6)
  - Locking theseer/tokenizer (1.2.3)
  - Locking tijsverkoyen/css-to-inline-styles (v2.2.7)
  - Locking vlucas/phpdotenv (v5.6.1)
  - Locking voku/portable-ascii (2.0.1)
  - Locking webmozart/assert (1.11.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 107 installs, 0 updates, 0 removals
  - Downloading doctrine/lexer (3.0.1)
  - Downloading webmozart/assert (1.11.0)
  - Downloading dragonmantank/cron-expression (v3.4.0)
  - Downloading fakerphp/faker (v1.23.1)
  - Downloading symfony/http-foundation (v7.1.6)
  - Downloading fruitcake/php-cors (v1.3.0)
  - Downloading psr/http-message (2.0)
  - Downloading psr/http-client (1.0.3)
  - Downloading ralouphie/getallheaders (3.0.3)
  - Downloading psr/http-factory (1.1.0)
  - Downloading guzzlehttp/psr7 (2.7.0)
  - Downloading guzzlehttp/promises (2.0.4)
  - Downloading guzzlehttp/guzzle (7.9.2)
  - Downloading symfony/polyfill-php80 (v1.31.0)
  - Downloading guzzlehttp/uri-template (v1.0.3)
  - Downloading nunomaduro/termwind (v2.2.0)
  - Downloading phpoption/phpoption (1.9.3)
  - Downloading graham-campbell/result-type (v1.1.3)
  - Downloading vlucas/phpdotenv (v5.6.1)
  - Downloading symfony/css-selector (v7.1.6)
  - Downloading tijsverkoyen/css-to-inline-styles (v2.2.7)
  - Downloading symfony/var-dumper (v7.1.6)
  - Downloading symfony/polyfill-uuid (v1.31.0)
  - Downloading symfony/uid (v7.1.6)
  - Downloading symfony/routing (v7.1.6)
  - Downloading symfony/polyfill-intl-idn (v1.31.0)
  - Downloading symfony/mime (v7.1.6)
  - Downloading psr/event-dispatcher (1.0.0)
  - Downloading symfony/event-dispatcher-contracts (v3.5.0)
  - Downloading symfony/event-dispatcher (v7.1.6)
  - Downloading psr/log (3.0.2)
  - Downloading egulias/email-validator (4.0.2)
  - Downloading symfony/mailer (v7.1.6)
  - Downloading symfony/error-handler (v7.1.6)
  - Downloading symfony/http-kernel (v7.1.6)
  - Downloading ramsey/collection (2.0.0)
  - Downloading brick/math (0.12.1)
  - Downloading ramsey/uuid (4.7.6)
  - Downloading monolog/monolog (3.7.0)
  - Downloading league/mime-type-detection (1.16.0)
  - Downloading league/flysystem (3.29.1)
  - Downloading league/flysystem-local (3.29.0)
  - Downloading nette/utils (v4.0.5)
  - Downloading nette/schema (v1.3.2)
  - Downloading dflydev/dot-access-data (v3.0.3)
  - Downloading league/config (v1.2.0)
  - Downloading league/commonmark (2.5.3)
  - Downloading laravel/serializable-closure (v1.3.5)
  - Downloading laravel/framework (v11.30.0)
  - Downloading laravel/pail (v1.2.0)
  - Downloading laravel/pint (v1.18.1)
  - Downloading symfony/yaml (v7.1.6)
  - Downloading laravel/sail (v1.37.1)
  - Downloading nikic/php-parser (v5.3.1)
  - Downloading psy/psysh (v0.12.4)
  - Downloading laravel/tinker (v2.10.0)
  - Downloading hamcrest/hamcrest-php (v2.0.1)
  - Downloading mockery/mockery (1.6.12)
  - Downloading filp/whoops (2.16.0)
  - Downloading nunomaduro/collision (v8.5.0)
  - Downloading sebastian/version (5.0.2)
  - Downloading sebastian/type (5.1.0)
  - Downloading sebastian/recursion-context (6.0.2)
  - Downloading sebastian/object-reflector (4.0.1)
  - Downloading sebastian/object-enumerator (6.0.1)
  - Downloading sebastian/global-state (7.0.2)
  - Downloading sebastian/exporter (6.1.3)
  - Downloading sebastian/environment (7.2.0)
  - Downloading sebastian/diff (6.0.2)
  - Downloading sebastian/comparator (6.2.1)
  - Downloading sebastian/code-unit (3.0.1)
  - Downloading sebastian/cli-parser (3.0.2)
  - Downloading phpunit/php-timer (7.0.1)
  - Downloading phpunit/php-text-template (4.0.1)
  - Downloading phpunit/php-invoker (5.0.1)
  - Downloading phpunit/php-file-iterator (5.1.0)
  - Downloading theseer/tokenizer (1.2.3)
  - Downloading sebastian/lines-of-code (3.0.1)
  - Downloading sebastian/complexity (4.0.1)
  - Downloading sebastian/code-unit-reverse-lookup (4.0.1)
  - Downloading phpunit/php-code-coverage (11.0.7)
  - Downloading phar-io/version (3.2.1)
  - Downloading phar-io/manifest (2.0.4)
  - Downloading myclabs/deep-copy (1.12.0)
  - Downloading phpunit/phpunit (11.4.3)
  - Installing doctrine/inflector (2.0.10): Extracting archive
  - Installing doctrine/lexer (3.0.1): Extracting archive
  - Installing symfony/polyfill-ctype (v1.31.0): Extracting archive
  - Installing webmozart/assert (1.11.0): Extracting archive
  - Installing dragonmantank/cron-expression (v3.4.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.5.0): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing fakerphp/faker (v1.23.1): Extracting archive
  - Installing symfony/polyfill-php83 (v1.31.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.31.0): Extracting archive
  - Installing symfony/http-foundation (v7.1.6): Extracting archive
  - Installing fruitcake/php-cors (v1.3.0): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.1.0): Extracting archive
  - Installing guzzlehttp/psr7 (2.7.0): Extracting archive
  - Installing guzzlehttp/promises (2.0.4): Extracting archive
  - Installing guzzlehttp/guzzle (7.9.2): Extracting archive
  - Installing symfony/polyfill-php80 (v1.31.0): Extracting archive
  - Installing guzzlehttp/uri-template (v1.0.3): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.31.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.31.0): Extracting archive
  - Installing symfony/string (v7.1.6): Extracting archive
  - Installing symfony/service-contracts (v3.5.0): Extracting archive
  - Installing symfony/console (v7.1.6): Extracting archive
  - Installing nunomaduro/termwind (v2.2.0): Extracting archive
  - Installing voku/portable-ascii (2.0.1): Extracting archive
  - Installing phpoption/phpoption (1.9.3): Extracting archive
  - Installing graham-campbell/result-type (v1.1.3): Extracting archive
  - Installing vlucas/phpdotenv (v5.6.1): Extracting archive
  - Installing symfony/css-selector (v7.1.6): Extracting archive
  - Installing tijsverkoyen/css-to-inline-styles (v2.2.7): Extracting archive
  - Installing symfony/var-dumper (v7.1.6): Extracting archive
  - Installing symfony/polyfill-uuid (v1.31.0): Extracting archive
  - Installing symfony/uid (v7.1.6): Extracting archive
  - Installing symfony/routing (v7.1.6): Extracting archive
  - Installing symfony/process (v7.1.6): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.31.0): Extracting archive
  - Installing symfony/mime (v7.1.6): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.5.0): Extracting archive
  - Installing symfony/event-dispatcher (v7.1.6): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing egulias/email-validator (4.0.2): Extracting archive
  - Installing symfony/mailer (v7.1.6): Extracting archive
  - Installing symfony/error-handler (v7.1.6): Extracting archive
  - Installing symfony/http-kernel (v7.1.6): Extracting archive
  - Installing symfony/finder (v7.1.6): Extracting archive
  - Installing ramsey/collection (2.0.0): Extracting archive
  - Installing brick/math (0.12.1): Extracting archive
  - Installing ramsey/uuid (4.7.6): Extracting archive
  - Installing psr/simple-cache (3.0.0): Extracting archive
  - Installing symfony/translation-contracts (v3.5.0): Extracting archive
  - Installing symfony/translation (v7.1.6): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing symfony/clock (v7.1.6): Extracting archive
  - Installing carbonphp/carbon-doctrine-types (3.2.0): Extracting archive
  - Installing nesbot/carbon (3.8.1): Extracting archive
  - Installing monolog/monolog (3.7.0): Extracting archive
  - Installing league/mime-type-detection (1.16.0): Extracting archive
  - Installing league/flysystem (3.29.1): Extracting archive
  - Installing league/flysystem-local (3.29.0): Extracting archive
  - Installing nette/utils (v4.0.5): Extracting archive
  - Installing nette/schema (v1.3.2): Extracting archive
  - Installing dflydev/dot-access-data (v3.0.3): Extracting archive
  - Installing league/config (v1.2.0): Extracting archive
  - Installing league/commonmark (2.5.3): Extracting archive
  - Installing laravel/serializable-closure (v1.3.5): Extracting archive
  - Installing laravel/prompts (v0.3.1): Extracting archive
  - Installing laravel/framework (v11.30.0): Extracting archive
  - Installing laravel/pail (v1.2.0): Extracting archive
  - Installing laravel/pint (v1.18.1): Extracting archive
  - Installing symfony/yaml (v7.1.6): Extracting archive
  - Installing laravel/sail (v1.37.1): Extracting archive
  - Installing nikic/php-parser (v5.3.1): Extracting archive
  - Installing psy/psysh (v0.12.4): Extracting archive
  - Installing laravel/tinker (v2.10.0): Extracting archive
  - Installing hamcrest/hamcrest-php (v2.0.1): Extracting archive
  - Installing mockery/mockery (1.6.12): Extracting archive
  - Installing filp/whoops (2.16.0): Extracting archive
  - Installing nunomaduro/collision (v8.5.0): Extracting archive
  - Installing sebastian/version (5.0.2): Extracting archive
  - Installing sebastian/type (5.1.0): Extracting archive
  - Installing sebastian/recursion-context (6.0.2): Extracting archive
  - Installing sebastian/object-reflector (4.0.1): Extracting archive
  - Installing sebastian/object-enumerator (6.0.1): Extracting archive
  - Installing sebastian/global-state (7.0.2): Extracting archive
  - Installing sebastian/exporter (6.1.3): Extracting archive
  - Installing sebastian/environment (7.2.0): Extracting archive
  - Installing sebastian/diff (6.0.2): Extracting archive
  - Installing sebastian/comparator (6.2.1): Extracting archive
  - Installing sebastian/code-unit (3.0.1): Extracting archive
  - Installing sebastian/cli-parser (3.0.2): Extracting archive
  - Installing phpunit/php-timer (7.0.1): Extracting archive
  - Installing phpunit/php-text-template (4.0.1): Extracting archive
  - Installing phpunit/php-invoker (5.0.1): Extracting archive
  - Installing phpunit/php-file-iterator (5.1.0): Extracting archive
  - Installing theseer/tokenizer (1.2.3): Extracting archive
  - Installing sebastian/lines-of-code (3.0.1): Extracting archive
  - Installing sebastian/complexity (4.0.1): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (4.0.1): Extracting archive
  - Installing phpunit/php-code-coverage (11.0.7): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.4): Extracting archive
  - Installing myclabs/deep-copy (1.12.0): Extracting archive
  - Installing phpunit/phpunit (11.4.3): Extracting archive
39 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
78 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
> @php -r "file_exists('.env') || copy('.env.example', '.env');"

   INFO  Application key set successfully.  

 ┌ Which database will your application use? ───────────────────┐
 │ SQLite                                                       │
 └──────────────────────────────────────────────────────────────┘

 ┌ Would you like to run the default database migrations? ──────┐
 │ No                                                           │
 └──────────────────────────────────────────────────────────────┘

./composer.json has been updated
Using version ^3.5 for pestphp/pest
Using version ^3.0 for pestphp/pest-plugin-laravel
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies
Lock file operations: 14 installs, 0 updates, 0 removals
  - Locking brianium/paratest (v7.6.0)
  - Locking doctrine/deprecations (1.1.3)
  - Locking fidry/cpu-core-counter (1.2.0)
  - Locking jean85/pretty-package-versions (2.0.6)
  - Locking pestphp/pest (v3.5.1)
  - Locking pestphp/pest-plugin (v3.0.0)
  - Locking pestphp/pest-plugin-arch (v3.0.0)
  - Locking pestphp/pest-plugin-laravel (v3.0.0)
  - Locking pestphp/pest-plugin-mutate (v3.0.5)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.5.0)
  - Locking phpdocumentor/type-resolver (1.9.0)
  - Locking phpstan/phpdoc-parser (1.33.0)
  - Locking ta-tikoma/phpunit-architecture-test (0.8.4)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 14 installs, 0 updates, 0 removals
  - Downloading pestphp/pest-plugin (v3.0.0)
  - Downloading jean85/pretty-package-versions (2.0.6)
  - Downloading fidry/cpu-core-counter (1.2.0)
  - Downloading brianium/paratest (v7.6.0)
  - Downloading phpstan/phpdoc-parser (1.33.0)
  - Downloading phpdocumentor/reflection-common (2.2.0)
  - Downloading doctrine/deprecations (1.1.3)
  - Downloading phpdocumentor/type-resolver (1.9.0)
  - Downloading phpdocumentor/reflection-docblock (5.5.0)
  - Downloading ta-tikoma/phpunit-architecture-test (0.8.4)
  - Downloading pestphp/pest-plugin-arch (v3.0.0)
  - Downloading pestphp/pest-plugin-mutate (v3.0.5)
  - Downloading pestphp/pest (v3.5.1)
  - Downloading pestphp/pest-plugin-laravel (v3.0.0)
  - Installing pestphp/pest-plugin (v3.0.0): Extracting archive
  - Installing jean85/pretty-package-versions (2.0.6): Extracting archive
  - Installing fidry/cpu-core-counter (1.2.0): Extracting archive
  - Installing brianium/paratest (v7.6.0): Extracting archive
  - Installing phpstan/phpdoc-parser (1.33.0): Extracting archive
  - Installing phpdocumentor/reflection-common (2.2.0): Extracting archive
  - Installing doctrine/deprecations (1.1.3): Extracting archive
  - Installing phpdocumentor/type-resolver (1.9.0): Extracting archive
  - Installing phpdocumentor/reflection-docblock (5.5.0): Extracting archive
  - Installing ta-tikoma/phpunit-architecture-test (0.8.4): Extracting archive
  - Installing pestphp/pest-plugin-arch (v3.0.0): Extracting archive
  - Installing pestphp/pest-plugin-mutate (v3.0.5): Extracting archive
  - Installing pestphp/pest (v3.5.1): Extracting archive
  - Installing pestphp/pest-plugin-laravel (v3.0.0): Extracting archive
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.  

  laravel/pail .......................................................................................................... DONE
  laravel/sail .......................................................................................................... DONE
  laravel/tinker ........................................................................................................ DONE
  nesbot/carbon ......................................................................................................... DONE
  nunomaduro/collision .................................................................................................. DONE
  nunomaduro/termwind ................................................................................................... DONE
  pestphp/pest-plugin-laravel ........................................................................................... DONE

85 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].  

No security vulnerability advisories found.

   INFO  Preparing tests directory.

  phpunit.xml ........................................................................................... File already exists.  
  tests/Pest.php ............................................................................................... File created.  
  tests/TestCase.php .................................................................................... File already exists.  
  tests/Unit/ExampleTest.php ............................................................................ File already exists.  
  tests/Feature/ExampleTest.php ......................................................................... File already exists.  

   INFO  Application ready in [LockPassManager]. You can start your local development using:

➜ cd LockPassManager
➜ php artisan serve

  New to Laravel? Check out our bootcamp and documentation. Build something amazing!
```

Instale os pacotes do npm
```
npm install
```