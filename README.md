# Inicio do site com framework4

    #para iniciar o composer
    $ composer init

    #para inserir as bibliotecas
    $ composer require 
        slim

    #vamos usar o PLATES
    https://platesphp.com/

    $ composer require
        leage/plates

## Alterar estrutura do PSR-4 do autoload para app, mudar a estrutura criada inicial para:
    "autoload": {
        "psr-4": {
            "app\\": "app/"
        }
    }

    #Execute o Comando dump autoload para recarregar as configurações do composer.json
        $ composer dump-autoload 
        ou abreviado
        $ composer du

## para subir o mini projeto 
    $ php -S localhost:8000 -t public
