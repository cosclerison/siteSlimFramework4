# Inicio do site com framework4

    $ composer init
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
    $ composer du

