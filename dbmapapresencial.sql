-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2020 às 01:27
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbmapapresencial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `alu_matricula` varchar(20) NOT NULL,
  `alu_dt_matricula` date NOT NULL,
  `alu_dt_conlusao` date DEFAULT NULL,
  `fk_pes_cpf` char(11) NOT NULL,
  `fk_resp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aviso`
--

CREATE TABLE `tb_aviso` (
  `avi_id` int(11) NOT NULL,
  `avi_titulo` varchar(100) NOT NULL,
  `avi_mensagem` varchar(300) NOT NULL,
  `avi_dt_hora` datetime NOT NULL,
  `fk_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_destinatario_recebe`
--

CREATE TABLE `tb_destinatario_recebe` (
  `dest_status` tinyint(1) NOT NULL,
  `fk_avi_id` int(11) NOT NULL,
  `fk_usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_histico_de_log`
--

CREATE TABLE `tb_histico_de_log` (
  `log_id` bigint(20) NOT NULL,
  `log_dt_hora` datetime NOT NULL,
  `log_descricao` varchar(100) NOT NULL,
  `log_comando` varchar(2000) NOT NULL,
  `fk_usu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_horario`
--

CREATE TABLE `tb_horario` (
  `hor_id` int(11) NOT NULL,
  `hor_inicial` time NOT NULL,
  `hor_final` time NOT NULL,
  `hor_min_tolerancia` tinyint(4) NOT NULL,
  `hor_dt_espec_inicial` date DEFAULT NULL,
  `hor_dt_espec_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ht_possui`
--

CREATE TABLE `tb_ht_possui` (
  `fk_tur_id` smallint(6) NOT NULL,
  `fk_hor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_lotacao`
--

CREATE TABLE `tb_lotacao` (
  `lot_id` bigint(20) NOT NULL,
  `lot_ano` smallint(6) NOT NULL,
  `fk_alu_matricula` varchar(20) NOT NULL,
  `fK_tur_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_movimentacao`
--

CREATE TABLE `tb_movimentacao` (
  `mov_id` int(11) NOT NULL,
  `mov_dt_hora` datetime NOT NULL,
  `mov_tipo` enum('N','L','B') NOT NULL,
  `mov_status` enum('n','l','b') NOT NULL,
  `mov_cracha_vis` tinyint(4) DEFAULT NULL,
  `mov_observacao` varchar(100) DEFAULT NULL,
  `fk_pes_cpf` char(11) DEFAULT NULL,
  `fk_rec_matricula` varchar(20) NOT NULL,
  `fk_vis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `pes_cpf` char(11) NOT NULL,
  `pes_nome` varchar(50) NOT NULL,
  `pes_sexo` enum('F','M') NOT NULL,
  `pes_dt_nasc` date NOT NULL,
  `pes_tel1` char(11) NOT NULL,
  `pes_tel2` char(11) DEFAULT NULL,
  `pes_endereco` varchar(200) NOT NULL,
  `pes_necessidades_extras` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`pes_cpf`, `pes_nome`, `pes_sexo`, `pes_dt_nasc`, `pes_tel1`, `pes_tel2`, `pes_endereco`, `pes_necessidades_extras`) VALUES
('1234567890', 'sergio master', 'M', '1990-12-30', '23999888777', 'null', 'rua x', 'null');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recepcionista`
--

CREATE TABLE `tb_recepcionista` (
  `rec_matricula` varchar(20) NOT NULL,
  `rec_vinculo` varchar(50) NOT NULL,
  `fk_pes_cpf` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_responsavel`
--

CREATE TABLE `tb_responsavel` (
  `resp_id` int(11) NOT NULL,
  `resp_parentesco` varchar(30) NOT NULL,
  `fk_pes_cpf` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_restricao`
--

CREATE TABLE `tb_restricao` (
  `res_id` int(11) NOT NULL,
  `res_tipo` enum('e','s') NOT NULL,
  `res_descricao` varchar(100) NOT NULL,
  `res_dt_inicial` date NOT NULL,
  `res_dt_final` date NOT NULL,
  `res_categoria` varchar(20) NOT NULL,
  `fk_alu_matricula` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE `tb_turma` (
  `tur_id` smallint(6) NOT NULL,
  `tur_descricao` varchar(100) NOT NULL,
  `tur_curso` varchar(30) NOT NULL,
  `tur_modalidade` varchar(30) NOT NULL,
  `tur_etapa` tinyint(4) NOT NULL,
  `tur_turno` enum('N','V','M','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_email` varchar(30) DEFAULT NULL,
  `usu_tipo` enum('adm','alu','res','rec') NOT NULL,
  `usu_senha` char(32) NOT NULL,
  `usu_foto` blob DEFAULT NULL,
  `usu_ativo` tinyint(1) NOT NULL,
  `fk_pes_cpf` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usu_id`, `usu_email`, `usu_tipo`, `usu_senha`, `usu_foto`, `usu_ativo`, `fk_pes_cpf`) VALUES
(1, 'adm@faetec.com', 'adm', '80177534a0c99a7e3645b52f2027a48b', NULL, 1, '1234567890');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_visitante`
--

CREATE TABLE `tb_visitante` (
  `vis_id` int(11) NOT NULL,
  `vis_nome` varchar(50) NOT NULL,
  `vis_contato` varchar(30) NOT NULL,
  `vis_documento` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`alu_matricula`),
  ADD KEY `FK_tb_aluno_2` (`fk_pes_cpf`),
  ADD KEY `FK_tb_aluno_3` (`fk_resp_id`);

--
-- Índices para tabela `tb_aviso`
--
ALTER TABLE `tb_aviso`
  ADD PRIMARY KEY (`avi_id`),
  ADD KEY `FK_tb_aviso_2` (`fk_usu_id`);

--
-- Índices para tabela `tb_destinatario_recebe`
--
ALTER TABLE `tb_destinatario_recebe`
  ADD PRIMARY KEY (`fk_avi_id`,`fk_usu_id`),
  ADD KEY `FK_tb_destinatario_recebe_2` (`fk_usu_id`);

--
-- Índices para tabela `tb_histico_de_log`
--
ALTER TABLE `tb_histico_de_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `FK_tb_histico_de_log_1` (`fk_usu_id`);

--
-- Índices para tabela `tb_horario`
--
ALTER TABLE `tb_horario`
  ADD PRIMARY KEY (`hor_id`);

--
-- Índices para tabela `tb_ht_possui`
--
ALTER TABLE `tb_ht_possui`
  ADD PRIMARY KEY (`fk_tur_id`,`fk_hor_id`),
  ADD KEY `FK_tb_ht_possui_2` (`fk_hor_id`);

--
-- Índices para tabela `tb_lotacao`
--
ALTER TABLE `tb_lotacao`
  ADD PRIMARY KEY (`lot_id`),
  ADD KEY `FK_tb_lotacao_1` (`fk_alu_matricula`),
  ADD KEY `FK_tb_lotacao_2` (`fK_tur_id`);

--
-- Índices para tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  ADD PRIMARY KEY (`mov_id`),
  ADD KEY `FK_tb_movimentacao_2` (`fk_pes_cpf`),
  ADD KEY `FK_tb_movimentacao_3` (`fk_rec_matricula`),
  ADD KEY `FK_tb_movimentacao_1` (`fk_vis_id`);

--
-- Índices para tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`pes_cpf`);

--
-- Índices para tabela `tb_recepcionista`
--
ALTER TABLE `tb_recepcionista`
  ADD PRIMARY KEY (`rec_matricula`),
  ADD KEY `FK_tb_recepcionista_2` (`fk_pes_cpf`);

--
-- Índices para tabela `tb_responsavel`
--
ALTER TABLE `tb_responsavel`
  ADD PRIMARY KEY (`resp_id`),
  ADD UNIQUE KEY `fk_pes_cpf` (`fk_pes_cpf`);

--
-- Índices para tabela `tb_restricao`
--
ALTER TABLE `tb_restricao`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `FK_tb_restricao_2` (`fk_alu_matricula`);

--
-- Índices para tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD PRIMARY KEY (`tur_id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `fk_pes_cpf` (`fk_pes_cpf`),
  ADD UNIQUE KEY `usu_email` (`usu_email`);

--
-- Índices para tabela `tb_visitante`
--
ALTER TABLE `tb_visitante`
  ADD PRIMARY KEY (`vis_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_aviso`
--
ALTER TABLE `tb_aviso`
  MODIFY `avi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_histico_de_log`
--
ALTER TABLE `tb_histico_de_log`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_horario`
--
ALTER TABLE `tb_horario`
  MODIFY `hor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_lotacao`
--
ALTER TABLE `tb_lotacao`
  MODIFY `lot_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  MODIFY `mov_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_responsavel`
--
ALTER TABLE `tb_responsavel`
  MODIFY `resp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_restricao`
--
ALTER TABLE `tb_restricao`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  MODIFY `tur_id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_visitante`
--
ALTER TABLE `tb_visitante`
  MODIFY `vis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD CONSTRAINT `FK_tb_aluno_2` FOREIGN KEY (`fk_pes_cpf`) REFERENCES `tb_pessoa` (`pes_cpf`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_tb_aluno_3` FOREIGN KEY (`fk_resp_id`) REFERENCES `tb_responsavel` (`resp_id`);

--
-- Limitadores para a tabela `tb_aviso`
--
ALTER TABLE `tb_aviso`
  ADD CONSTRAINT `FK_tb_aviso_2` FOREIGN KEY (`fk_usu_id`) REFERENCES `tb_usuario` (`usu_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_destinatario_recebe`
--
ALTER TABLE `tb_destinatario_recebe`
  ADD CONSTRAINT `FK_tb_destinatario_recebe_1` FOREIGN KEY (`fk_avi_id`) REFERENCES `tb_aviso` (`avi_id`),
  ADD CONSTRAINT `FK_tb_destinatario_recebe_2` FOREIGN KEY (`fk_usu_id`) REFERENCES `tb_usuario` (`usu_id`);

--
-- Limitadores para a tabela `tb_histico_de_log`
--
ALTER TABLE `tb_histico_de_log`
  ADD CONSTRAINT `FK_tb_histico_de_log_1` FOREIGN KEY (`fk_usu_id`) REFERENCES `tb_usuario` (`usu_id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_ht_possui`
--
ALTER TABLE `tb_ht_possui`
  ADD CONSTRAINT `FK_tb_ht_possui_1` FOREIGN KEY (`fk_tur_id`) REFERENCES `tb_turma` (`tur_id`),
  ADD CONSTRAINT `FK_tb_ht_possui_2` FOREIGN KEY (`fk_hor_id`) REFERENCES `tb_horario` (`hor_id`);

--
-- Limitadores para a tabela `tb_lotacao`
--
ALTER TABLE `tb_lotacao`
  ADD CONSTRAINT `FK_tb_lotacao_1` FOREIGN KEY (`fk_alu_matricula`) REFERENCES `tb_aluno` (`alu_matricula`),
  ADD CONSTRAINT `FK_tb_lotacao_2` FOREIGN KEY (`fK_tur_id`) REFERENCES `tb_turma` (`tur_id`);

--
-- Limitadores para a tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  ADD CONSTRAINT `FK_tb_movimentacao_1` FOREIGN KEY (`fk_vis_id`) REFERENCES `tb_visitante` (`vis_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_tb_movimentacao_2` FOREIGN KEY (`fk_pes_cpf`) REFERENCES `tb_pessoa` (`pes_cpf`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_tb_movimentacao_3` FOREIGN KEY (`fk_rec_matricula`) REFERENCES `tb_recepcionista` (`rec_matricula`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_recepcionista`
--
ALTER TABLE `tb_recepcionista`
  ADD CONSTRAINT `FK_tb_recepcionista_2` FOREIGN KEY (`fk_pes_cpf`) REFERENCES `tb_pessoa` (`pes_cpf`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_responsavel`
--
ALTER TABLE `tb_responsavel`
  ADD CONSTRAINT `FK_tb_responsavel_2` FOREIGN KEY (`fk_pes_cpf`) REFERENCES `tb_pessoa` (`pes_cpf`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_restricao`
--
ALTER TABLE `tb_restricao`
  ADD CONSTRAINT `FK_tb_restricao_2` FOREIGN KEY (`fk_alu_matricula`) REFERENCES `tb_aluno` (`alu_matricula`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `FK_tb_usuario_2` FOREIGN KEY (`fk_pes_cpf`) REFERENCES `tb_pessoa` (`pes_cpf`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
