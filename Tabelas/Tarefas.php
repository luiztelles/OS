<?php

namespace OS\Tabelas;


class Tarefas 
{

    protected $id;
    protected $usuario_id_criado;
    protected $usuario_id_atribuido;
    protected $area;
    protected $datacriacao;
    protected $descricao;
    protected $observacao;
    protected $status;
    protected $prioridade;
    protected $prazo;
    
    public function setArea(OS\Tabelas\Area $objArea)
    {
        $this->area_id = $objArea->getId();
        
    }
    
    public function setUsuarioCriado(Usuarios $objUsuario)
    {
        $this->usuario_id_criado = $objUsuario;
    }            
            
    public function setUsuarioAtribuido(Usuarios $objUsuario)
    {
        $this->usuario_id_atribuido = $objUsuario;
    }         
   
    public function setDataCriacao(\DateTime $data)
    {
        $this->datacriacao = $data;
    }
            
    public function setDescricao($valor)
    {
        $this->descriacao = $valor;
    }
    
    public function setObservacao($valor)
    {
        $this->observacao = $valor;
    }
    
    public function setStatus($valor)
    {
        $this->status = $valor;
    }
    
    public function setPrioridade($valor)
    {
        $this->prioridade = $valor;
    }
 
    public function setPrazo($valor)
    {
        $this->prazo = $valor;
    }

    public function getPrazo()
    {
        return $this->prazo;
    }

        public function getId()
    {
        return $this->Id;
    }

        public function getPrioridade()
    {
        return $this->prioridade;
    }

        public function getArea()
    {
        return $this->area;
    }

        public function getStatus()
    {
        return $this->status;
    }

        public function getObservacao()
    {
        return $this->observacao;
    }

        public function getDescricao()
    {
        return $this->descricao;
    }

        public function getUsuario()
    {
        return $this->usuario;
    }

        public function getDataCriacao()
    {
        return $this->datacriacao;
    }

        public function getUsuarioCriacao()
    {
        return $this->usuariocriacao;
    }

        public function getUsuarioAtribuido()
    {
        return $this->usuarioatribuido;
    }

}
