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
    public function __construct($qtd_medio = 2, $qtd_grande = 2, $num_slots = 10)
    {
        $this->aloca_nichos($qtd_medio, $qtd_grande, $num_slots);
        // TESTING
        var_dump($this->nicho_medio);
        var_dump($this->nicho_grande);
    }
    /**
     * Aloca em memória quantos nichos existem
     * @param int $qtd_medio Quantidade de nichos Médios disponíveis
     * @param int $qtd_grande Quantidade de nichos Grandes disponíveis
     */
    private function aloca_nichos($qtd_medio, $qtd_grande, $num_slots)
    {
        /*
        gera um array com a seguinte estrutura:
        $nicho = [
            'M1' = ['0','0','0','0','0','0','0','0',]
            'M2' = ['0','0','0','0','0','0','0','0',]
        ]
        
        */ 
        for ($i = 1; $i <= $qtd_medio; $i++) {
            $this->nicho_medio['M' . $i] = array_fill(0, $num_slots, '0');
            $this->nicho_grande['G' . $i] = array_fill(0, $num_slots, '0');
        }
    }
}
