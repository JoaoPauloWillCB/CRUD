PARA A EXECUÇÃO DO PROJETO
- Para o desenvolvimento do projeto: VsCode, XAMPP e MySQL Workbench
- Para a execução do projeto será necessario o XAMPP e o MySQL Workbench.
- Após o download do XAMPP voce ira no Disco local do seu computador e irá procurar a pasta "xampp", achando, você ira entrar e procurar a pasta "htdocs", entrando nela
você irá colocar a pasta do projeto dentro dela;
- No XAMPP você ira ligar o Apache e o MySQL. Caso seja necessario a troca de alguma das portas de conexão do XAMPP, no XAMPP entre em config "service and port settings" e mude
as main port's (neste projeto é utilizada a port padrão do XAMPP somente no MySQL).
- Em seguida ira executar o arquivo do crud.txt no MySQL workbench para criação do banco de dados e da tabela usuarios.
- A conexão com o banco de dados será feita na pasta config no arquivo "congif.php". Caso no seu banco tenha senha ou nao seja o nome de usuário padrão troque nos campos "$dbUser" e "$dbPassword"
- Feito isso va no seu navegador e coloque "localhost:8080/CRUD-Sabanco/home.php". (a porta do apache neste projeto é 8080).
