# miniframework
# php -v

# cd C:\xampp\htdocs\WWW\miniframework\public
# php -S localhost:8080
# http://localhost:8080

# php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

### verificação do script ###

# php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

# php composer-setup.php
# php -r "unlink('composer-setup.php');"


### Criando páginas com MVC
# criar método na indexController;

# instanciar na Route;
# criar página com conteúdo na View;

# criar index na View/index;

# criar querys Models->novo arquivo nome relacionado

# sempre necessário importar use App\Models\ ...