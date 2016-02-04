CREATE TABLE Cliente (
  cpfC VARCHAR(20) NOT NULL,
  Empresa_idEmpresa INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(45) NOT NULL,
  datanasc DATE NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  cep INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(cpfC),
  INDEX Cliente_FKIndex1(Empresa_idEmpresa)
);

CREATE TABLE Despesas (
  idDespesas INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Empresa_idEmpresa INTEGER UNSIGNED NOT NULL,
  valor DOUBLE NOT NULL,
  nome VARCHAR(45) NOT NULL,
  data_2 DATE NOT NULL,
  PRIMARY KEY(idDespesas),
  INDEX Despesas_FKIndex1(Empresa_idEmpresa)
);

CREATE TABLE Empresa (
  idEmpresa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  cnpj VARCHAR(20) NOT NULL,
  razaoSocial VARCHAR(45) NOT NULL,
  endereco VARCHAR(45) NOT NULL,
  PRIMARY KEY(idEmpresa)
);

CREATE TABLE Funcionario (
  cpfF VARCHAR(20) NOT NULL,
  nome VARCHAR(255) NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  cep INTEGER UNSIGNED NOT NULL,
  salario DOUBLE NOT NULL,
  PRIMARY KEY(cpfF)
);

CREATE TABLE Funcionario_has_Venda (
  Funcionario_cpfF VARCHAR(20) NOT NULL,
  Venda_Servico_idServico INTEGER UNSIGNED NOT NULL,
  Venda_Veiculo_placa INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(Funcionario_cpfF, Venda_Servico_idServico, Venda_Veiculo_placa),
  INDEX Funcionario_has_Venda_FKIndex1(Funcionario_cpfF),
  INDEX Funcionario_has_Venda_FKIndex2(Venda_Veiculo_placa, Venda_Servico_idServico)
);

CREATE TABLE Servico (
  idServico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  valor DOUBLE NOT NULL,
  comissao DOUBLE NOT NULL,
  PRIMARY KEY(idServico)
);

CREATE TABLE Veiculo (
  placa INTEGER UNSIGNED NOT NULL,
  Cliente_cpfC VARCHAR(20) NOT NULL,
  fabricante VARCHAR(45) NULL,
  modelo VARCHAR(20) NULL,
  chassi INTEGER UNSIGNED NULL,
  tipo INTEGER UNSIGNED NULL,
  data_in DATE NULL,
  data_out DATE NULL,
  PRIMARY KEY(placa),
  INDEX Veiculo_FKIndex1(Cliente_cpfC)
);

CREATE TABLE Venda (
  Veiculo_placa INTEGER UNSIGNED NOT NULL,
  Servico_idServico INTEGER UNSIGNED NOT NULL,
  valor DOUBLE NOT NULL,
  data_2 DATE NULL,
  valorCom DOUBLE NOT NULL,
  PRIMARY KEY(Veiculo_placa, Servico_idServico),
  INDEX Veiculo_has_Servico_FKIndex1(Veiculo_placa),
  INDEX Veiculo_has_Servico_FKIndex2(Servico_idServico)
);


