CREATE DATABASE rmsports;

CREATE table rmsports.feedback(
    id_feedback serial not null,
    feed_nome varchar (100) not null,
    feed_mensagem varchar (250) not null,
    feed_email varchar (100) not null,
    feed_opcao varchar (20) not null,
    primary key (id_feedback)
);

CREATE table rmsports.usuarios(
    id_usuario serial not null,
    usu_nome varchar (50) not null,
    usu_sobrenome varchar (50) not null,
    usu_usuario varchar (50) not null,
    usu_email varchar (100) not null,
    usu_senha varchar (100) not null,
    primary key (id_usuario)
);

CREATE table rmsports.produto(
    id_produto serial not null,
    prod_nome varchar (100) not null,
    prod_preco double not null,
    prod_descricao varchar (200) not null,
    tamanho_p int not null,
    tamanho_m int not null,
    tamanho_g int not null,
    tamanho_gg int not null,
    prod_imagem varchar (100) not null,
    primary key (id_produto)
);

INSERT INTO usuarios (usu_nome, usu_sobrenome, usu_usuario, usu_email, usu_senha) VALUES ('adm', 'adm', 'admin', 'admin@gmail.com', '123456');

INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do São Paulo', 175.12, 'Camisa do São Paulo, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_sao-paulo.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Palmeiras', 175.12, 'Camisa do Palmeiras, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa-palmeiras.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Corinthians', 175.12, 'Camisa exclusiva da parceria Nike e Corinthians, apenas na nossa loja!',20, 20, 20, 20, 'img/produtos/camisa_nike-corinthians.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa Feminina da seleção', 175.12, 'Camisa azul da seleção feminina de futebol brasileiro',20, 20, 20, 20, 'img/produtos/camisa_selecao-br-fem.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Vasco', 175.12, 'Camisa do Vasco, um dos grandes campeões brasileiros', 20, 20, 20, 20, 'img/produtos/camisa_vasco.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Flamengo', 175.12, 'Camisa do Flamengo, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_flamengo.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Cruzeiro', 175.12, 'Camisa do Cruzeiro, um dos grandes campeões brasileiros', 20, 20, 20, 20, 'img/produtos/camisa_cruzeiro.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Coritiba', 175.12, 'Camisa do Coritiba, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_coritiba.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Atlético Mineiro', 175.12, 'Camisa do Atlético Mineiro, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_atletico-mineiro.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Atlético Paranaense', 175.12, 'Camisa do Atlético Paranaense, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_atletico-paranaense.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Fluminense', 175.12, 'Camisa do Fluminense, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_fluminense.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Botafogo', 175.12, 'Camisa do Botafogo, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_botafogo.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Santos', 175.12, 'Camisa do Santos, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_santos.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa 02 do Santos', 175.12,'Camisa 02 do Santos, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_santos-black.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Ceará', 175.12, 'Camisa do Ceará, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_ceara.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Avaí', 175.12, 'Camisa do Avaí, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_avai.png');
INSERT INTO produto (prod_nome, prod_preco, prod_descricao, tamanho_p, tamanho_m, tamanho_g, tamanho_gg, prod_imagem) VALUES ('Camisa do Bragantino', 175.12, 'Camisa do Bragantino, um dos times da Série A do Campeonato Brasileiro', 20, 20, 20, 20, 'img/produtos/camisa_bragantino.png');
