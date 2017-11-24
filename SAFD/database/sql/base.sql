CREATE TABLE IF NOT EXISTS funcionario(        
    id_funcionario int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        siape_funcionario int(10) NOT NULL,
        nome_funcionario VARCHAR(40) NOT NULL,		
        n_portaria_funcionario VARCHAR(40) NOT NULL,
        email_funcionario VARCHAR(40) NOT NULL);                     

CREATE TABLE IF NOT EXISTS funcao(    
    id_funcao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,        
        descricao_funcao VARCHAR(40) NOT NULL); 
        
CREATE TABLE IF NOT EXISTS setor(
    id_setor int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_setor VARCHAR(40) NOT NULL);	                
        
CREATE TABLE IF NOT EXISTS usuario(        
    id_usuario int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,                               
        estado_usuario binary NOT NULL, 
        login_usuario VARCHAR(50) NOT NULL,
        senha_usuario VARCHAR(50) NOT NULL,
        data_cadastro TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,       
        
        id_funcionario int(10) NOT NULL,  
        id_funcao int(10) NOT NULL,  
        id_setor int(10) NOT NULL);      	
	
-- -- TABELAS VOLTADAS PARA SOLICITACAO DOS DOCUMENTOS	
CREATE TABLE IF NOT EXISTS status(
    id_status int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao_status VARCHAR(255) NOT NULL);			
	
CREATE TABLE IF NOT EXISTS tipo_despesa(
    id_tipodespesa int(10) NOT NULL PRIMARY KEY,
	nome_tipodespesa VARCHAR(255) NOT NULL);
	
CREATE TABLE IF NOT EXISTS unidade_gestora(
    id_unidadegestora int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        codigo_unidadegestora int(10) NOT NULL,
	nome_unidadegestora VARCHAR(255) NOT NULL);

CREATE TABLE IF NOT EXISTS avaliacao_dpdi(
    id_avaliacaodpdi int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	comentarios_avaliacaodpdi VARCHAR(255),
	planejamentoexercicio_avaliacaodpdi VARCHAR(255),
	
	id_status int(10) NOT NULL,
	id_unidadegestora int(10) NOT NULL);		

CREATE TABLE IF NOT EXISTS avaliacao_dad(
    id_avaliacaodad int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	recursos_avaliacaodad VARCHAR(255),
	comentarios_avaliacaodad VARCHAR(255),
	valorestimadodespesa_avaliacaodad int(255),
		
        id_status int(10) NOT NULL,
	id_tipodespesa int(10) NOT NULL);		    	

CREATE TABLE IF NOT EXISTS objeto(
    id_objeto int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome_objeto VARCHAR(255) NOT NULL,	
	especificacoestecnicas_objeto VARCHAR(255) NOT NULL,
	estrategiafornecimento_objeto VARCHAR(255) NOT NULL,
	preco_objeto varchar(10) NOT NULL,
	
        id_grupo int(10) NOT NULL);
	
CREATE TABLE IF NOT EXISTS grupo(
    id_grupo int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome_grupo VARCHAR(40) NOT NULL);
	
CREATE TABLE IF NOT EXISTS solicitacao_itens(	
    id_solicitacao_itens int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        quantidade int(10),
	prazoentrega_objeto VARCHAR(40), 
	prazoexecucao_objeto VARCHAR(40),
	
	id_solicitacao int(10) NOT NULL,
	id_objeto int(10) NOT NULL);		
            
CREATE TABLE IF NOT EXISTS solicitacao(
    id_solicitacao int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    numeroprotocolo_solicitacao VARCHAR(255),
    data_solicitacao NULL DEFAULT CURRENT_TIMESTAMP,  
    justificativa_solicitacao VARCHAR(255),	
    criterio_aceitabilidade VARCHAR(255),
    consulta_estoque VARCHAR(255),
		
-- -- -- CHAVES ESTRANGEIRAS
	id_usuario int(10) NOT NULL,
	id_status int(10) NOT NULL,
	id_avaliacaodpdi int(10) NOT NULL,
	id_avaliacaodad int(10) NOT NULL);	
       
    ALTER TABLE usuario
        ADD CONSTRAINT id_funcionario
        FOREIGN KEY (id_funcionario)
        REFERENCES funcionario(id_funcionario);
        
    ALTER TABLE usuario
        ADD CONSTRAINT id_setor
        FOREIGN KEY (id_setor)
        REFERENCES setor(id_setor);
    
    ALTER TABLE usuario 
        ADD CONSTRAINT id_funcao     
        FOREIGN KEY (id_funcao) 
        REFERENCES funcao(id_funcao);                           
         
    ALTER TABLE solicitacao_itens
        ADD CONSTRAINT id_solicitacao
        FOREIGN KEY (id_solicitacao)
        REFERENCES solicitacao(id_solicitacao);

    ALTER TABLE solicitacao_itens
        ADD CONSTRAINT id_objeto
        FOREIGN KEY (id_objeto)
        REFERENCES objeto(id_objeto);
         
    ALTER TABLE solicitacao
        ADD CONSTRAINT id_usuario
        FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usuario);            
        
    ALTER TABLE solicitacao
        ADD CONSTRAINT id_avaliacaodpdi
        FOREIGN KEY (id_avaliacaodpdi)
        REFERENCES avaliacao_dpdi(id_avaliacaodpdi);
        
    ALTER TABLE solicitacao
        ADD CONSTRAINT id_avaliacaodad
        FOREIGN KEY (id_avaliacaodad)
        REFERENCES avaliacao_dad(id_avaliacaodad);                         
        
    ALTER TABLE avaliacao_dpdi
        ADD CONSTRAINT id_unidadegestora
        FOREIGN KEY (id_unidadegestora)
        REFERENCES unidade_gestora(id_unidadegestora);	
        
    ALTER TABLE avaliacao_dad
        ADD CONSTRAINT id_tipodespesa
        FOREIGN KEY (id_tipodespesa)
        REFERENCES tipo_despesa(id_tipodespesa);	
        
    ALTER TABLE objeto
        ADD CONSTRAINT id_grupo
        FOREIGN KEY (id_grupo)
        REFERENCES grupo(id_grupo);                
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- 
