##	Desenvolva orientado a objeto e utilizando os padrões de projeto DAO e MVC:
--	Crie um menu, contendo os links “Quarto”, “Listar Reservas” e “Mostrar Reservas por mês” utilizando padrão de projeto composite;

--	Ao clicar no menu “Quarto” apresentar uma interface para cadastrar um quarto no Banco de Dados, layout livre 

--	Ao clicar no link “Listar Reservas”, deverá gerar um pdf layout livre, mas minimamente deverá ter nome do hotel, todos os dados do quarto, inclusive o tipo  e os dados da reserva. 

--	Ao clicar no link “Mostrar Reservas por mês” deverá gerar um gráfico de barras com a quantidade de reservas por mês do ano de 2024 (corrente). A legenda são os meses.


OBSERVAÇÕES:

•	Não criar nenhuma outra interface além das citadas acima;

•	Criar apenas as classes necessárias;

•	Considere para o item d a data da reserva;

•	Outras tabelas no BD, exceto quarto, devem ser populadas diretamente no Banco de Dados;

•	Para a conexão com o banco de dados deverá utilizar o padrão de projeto  singleton;

•	O Banco de dados deve chamar obrigatoriamente hotel e não alterar nome de campos e tabelas. Utilize o script hotel.sql para criar as tabelas;

