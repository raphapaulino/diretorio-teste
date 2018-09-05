<?php

class Slotter
{
    private $nicho_medio = [];
    private $nicho_grande = [];

    // inicializa quantos nichos existem
    /**
     * @param int $tam_medio Quantidade de nichos Médios disponíveis
     * @param int $tam_grande Quantidade de nichos Grandes disponíveis
     * 
     * @return void
     */
    public function __construct($qtd_medio = 2, $tam_grande = 2)
    {
        $this->aloca_medios($qtd_medio);
        var_dump($this->nicho_medio);
    }
    /**
     * Aloca em memória quantos nichos médios existem
     * @param int $tam_medio Quantidade de nichos Médios disponíveis
     */
    private function aloca_medios($qtd_medio)
    {
        for ($i=1; $i <= $qtd_medio ; $i++) { 
            $this->nicho_medio['M'. $i] = array();
        }
    }
}
