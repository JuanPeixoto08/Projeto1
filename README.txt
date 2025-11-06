PROJETO 1 – CRUD com PHP e MySQLi
Aluno: Juan Peixoto de Oliveira | Período: 2ºB | Novembro/2025

Tema: Dois módulos de cadastro (CRUD):
1. Clientes (feito em sala)
2. Produtos

Funcionalidades:
- Cadastrar, listar, editar e excluir clientes e produtos.
- Exibição pública dos dados e painel administrativo simples.
- Conexão via MySQLi e interface em HTML/CSS básico.

Banco de Dados:
Banco: projeto1
Tabelas: clientes (id, cliente, cidade, estado) e produtos (id, nome, preco, descricao)

Instruções:
1. Colocar a pasta em C:\xampp\htdocs\projeto1
2. Criar o banco “projeto1” e utilizar as tabelas

-------------------------------------------------
CREATE TABLE IF NOT EXISTS clientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cliente VARCHAR(100),
  cidade VARCHAR(100),
  estado VARCHAR(2)
);
-------------------------------------------------
CREATE TABLE produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  preco DECIMAL(10,2),
  descricao TEXT
);
-------------------------------------------------

3. Rodar em http://localhost/projeto1/
4. Painel admin: http://localhost/projeto1/admin/
