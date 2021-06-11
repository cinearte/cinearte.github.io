CREATE {DATABASE | SCHEMA} [IF NOT EXISTS] bdcinearte;
CREATE DATABASE bdcinearte IF NOT EXISTS (SELECT name FROM master.sys.databases WHERE name = N'cinearte')
   
   
-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--
DROP TABLE IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES
           WHERE usuarios = N'username');
CREATE TABLE IF NOT EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES
           WHERE usuarios = N'username')(
  username varchar(10) NOT NULL,
  senha varchar(10) NOT NULL,
  nome varchar(80) NOT NULL,
  email varchar(80) NOT NULL,
  PRIMARY KEY (username)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

DROP TABLE IF EXISTS curtas;
CREATE TABLE IF NOT EXISTS curtas (
	idint not null auto_increment,
	nome varchar(50) NOT NULL,
    obra varchar(50) NOT NULL,
    sinopse varchar(300) NOT NULL,
    alunos varchar(300) NOT NULL,
	concepcao varchar(300)   NOT NULL,
    roteiro varchar (300) NOT NULL,
	link varchar(300) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


