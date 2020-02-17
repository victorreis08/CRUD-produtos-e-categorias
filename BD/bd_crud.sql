CREATE DATABASE bd_crud;

use bd_crud;

CREATE TABLE `categoria` (
  `codigo_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(50) NOT NULL,
  `status_categoria` char(1) NOT NULL,
  `img_categoria` varchar(250) NOT NULL,
  `obs_categoria` varchar(250) NOT NULL
);



INSERT INTO `categoria` (`codigo_categoria`, `nome_categoria`, `status_categoria`, `img_categoria`, `obs_categoria`) VALUES
(11, 'Grãos', 'A', 'img/graos.png', 'Sem obs'),
(17, 'Laticinios', 'A', 'img/laticionios.png', 'Sem obs'),
(18, 'Variedades', 'A', 'img/variedades.png', 'Sem obs'),
(19, 'Frutas', 'A', 'img/FrutasOficial.png', 'Sem obs'),
(21, 'Linguiças', 'A', 'img/Linguicas.png', 'Sem obs'),
(23, 'Vegetais', 'A', 'img/Vegetais.png', 'Sem obs'),
(37, 'Carnes', 'A', 'img/amendoim.png', 'Sem obs');

-- --------------------------------------------------------


CREATE TABLE `produto` (
  `codigo_produto` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `validade_produto` date NOT NULL,
  `codigo_categoria` int(11) NOT NULL,
  `peso_produto` int(11) NOT NULL,
  `tipo_produto` char(2) NOT NULL,
  `preco_produto` decimal(10,2) NOT NULL,
  `img_produto` varchar(250) NOT NULL,
  `status_produto` char(2) NOT NULL
);



INSERT INTO `produto` (`codigo_produto`, `nome_produto`, `validade_produto`, `codigo_categoria`, `peso_produto`, `tipo_produto`, `preco_produto`, `img_produto`, `status_produto`) VALUES
(49, 'Chá Rio Tangerina', '2021-05-14', 18, 350, 'ml', '5.65', 'img/chaTangerina.jpg', 'mv'),
(50, 'Chá Rio Capim Santo', '2020-04-16', 18, 350, 'ml', '5.00', 'img/chaCapimsanto.jpg', 'mv'),
(51, 'Amendoim', '2020-02-16', 11, 250, 'gr', '10.00', 'img/amendoim.png', 'of'),
(52, 'Sal rosa do Himalai', '2021-12-12', 11, 500, 'gr', '12.20', 'img/salrosa.png', 'mv'),
(53, 'Vinagre Maça espinosa', '2020-12-12', 18, 250, 'ml', '11.99', 'img/vinagre_maca_spinosa.jpg', 'of'),
(54, 'Vinagre de Vegetal', '2021-02-22', 18, 250, 'ml', '15.50', 'img/vinagreFlach.jpg', 'of'),
(55, 'Pasta de Amendoim', '2021-10-20', 18, 1, 'kg', '20.10', 'img/pastaAmendoim.jpg', 'of'),
(56, 'Pasta de Amendoim Crocante', '2022-10-07', 18, 1, 'kg', '20.50', 'img/pastaAmendoim2.jpg', 'mv'),
(58, 'Queijo Parmesão Tirolez', '2022-11-22', 17, 2, 'kg', '95.99', 'img/quei.jpg', 'mv'),
(59, 'Polenghi Frescatino', '2020-10-15', 17, 220, 'gr', '10.90', 'img/polengui.jpg', 'of'),
(60, 'Catupiry Requeijão Cremoso', '2020-06-26', 17, 200, 'gr', '7.00', 'img/requeijão.jpg', 'of'),
(61, 'Fazenda Queijo Frescal', '2021-06-01', 17, 400, 'gr', '12.90', 'img/frescal.jpg', 'mv'),
(62, 'Café Excelência de Araxá (gourmet)', '2020-02-02', 11, 250, 'gr', '16.00', 'img/cafezin.jpg', 'of'),
(63, 'Ervilha Grano', '2020-02-16', 11, 300, 'gr', '10.99', 'img/ervilha.jpg', 'mv'),
(64, 'Soja em grão', '2021-02-25', 11, 250, 'gr', '5.90', 'img/soja.jpg', 'mv'),
(65, 'Arroz 7 Grãos Ráris', '2022-06-07', 11, 500, 'gr', '13.50', 'img/arroz.jpg', 'mv'),
(66, 'Linguiça com Queijo Coalho Perdigão', '2020-03-19', 21, 600, 'gr', '19.00', 'img/lingqueijo.jpg', 'of'),
(67, 'Linguiça Tipo Calabresa Excelcior', '2022-10-21', 21, 400, 'gr', '10.90', 'img/ling.jpg', 'of'),
(68, 'Linguiça Suina Corella', '2020-10-14', 21, 1, 'kg', '12.00', 'img/linguica.jpg', 'mv'),
(69, 'Maça Turma da Mônica', '2021-06-17', 19, 1, 'kg', '7.00', 'img/maca.jpg', 'of'),
(70, 'Laranja Lima', '2020-02-20', 19, 1, 'kg', '5.00', 'img/laranjas.jpg', 'mv'),
(72, 'Morango', '2020-02-11', 19, 250, 'gr', '4.50', 'img/morango.jpg', 'mv'),
(73, 'Brócolis', '2020-10-06', 23, 250, 'gr', '5.50', 'img/brocolis.jpg', 'of'),
(74, 'Couve Manteiga', '2020-03-18', 23, 180, 'gr', '4.90', 'img/couve.jpg', 'of'),
(75, 'Alface Crespa', '2020-09-29', 23, 170, 'gr', '3.60', 'img/alface.jpg', 'mv'),
(76, 'Uva verde', '2020-06-16', 19, 500, 'gr', '7.50', 'img/uvaverde.jpg', 'of'),
(77, 'Agrião Naturelle', '2020-10-13', 23, 100, 'gr', '3.00', 'img/agriao.jpg', 'of'),
(78, 'Vagem', '2020-06-17', 23, 150, 'gr', '2.50', 'img/vagem.jpg', 'of');


ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigo_categoria`);


ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo_produto`),
  ADD KEY `fk_categoria` (`codigo_categoria`);


ALTER TABLE `categoria`
  MODIFY `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;


ALTER TABLE `produto`
  MODIFY `codigo_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;


ALTER TABLE `produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`codigo_categoria`) REFERENCES `categoria` (`codigo_categoria`);