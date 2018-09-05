<?php

class Slotter
{
    private $nicho_medio = [];
    private $nicho_grande = [];

    // inicializa quantos nichos existem
    /**
     * @param int $qtd_medio Quantidade de nichos Médios disponíveis
     * @param int $qtd_grande Quantidade de nichos Grandes disponíveis
     * 
     * @return void
     */
    public function __construct($qtd_medio = 2, $qtd_grande = 2)
    {
        $this->aloca_nichos($qtd_medio, $qtd_grande);
        var_dump($this->nicho_medio);
        var_dump($this->nicho_grande);
    }
    /**
     * Aloca em memória quantos nichos existem
     * @param int $qtd_medio Quantidade de nichos Médios disponíveis
     * @param int $qtd_grande Quantidade de nichos Grandes disponíveis
     */
    private function aloca_nichos($qtd_medio, $qtd_grande)
    {
        for ($i=1; $i <= $qtd_medio ; $i++) { 
            $this->nicho_medio['M'. $i] = array();
            $this->nicho_grande['G'. $i] = array();
        }
    }
}
