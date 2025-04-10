RabbitMQ + LaravelEste projeto demonstra o uso do Laravel com filas utilizando RabbitMQ.
Pré-requisitosDocker
Docker Compose
Como executar o projeto# Suba os containers
docker-compose up --build

# Gere a chave da aplicação (caso necessário)
docker exec -it laravel-app php artisan key:generateAcesse em: http://localhost:8000
Enviando uma mensagem para a filacurl http://localhost:8000/jobVisualizando logs da filadocker exec -it laravel-app tail -f storage/logs/laravel.logAcessando o painel do RabbitMQAcesse: http://localhost:15672Usuário: guestSenha: guest
Fique à vontade para clonar, testar e contribuir!
