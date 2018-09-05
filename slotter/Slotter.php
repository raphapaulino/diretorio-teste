<?php

class Slotter
{
    private $nichos_medios = [];
    private $nichos_grandes = [];

    /**
     *  Inicializa quantos nichos existem
     * @param int $qtd_medio Quantidade de nichos Médios disponíveis
     * @param int $qtd_grande Quantidade de nichos Grandes disponíveis
     * 
     * @return void
     */
    public function __construct($qtd_medio = 2, $qtd_grande = 2, $num_slots = 10)
    {
        $this->aloca_nichos($qtd_medio, $qtd_grande, $num_slots);
        // TESTING
        var_dump($this->nichos_medios);
        var_dump($this->nichos_grandes);
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
            $this->nichos_medios['M' . $i] = array_fill(0, $num_slots, '0');
            $this->nichos_grandes['G' . $i] = array_fill(0, $num_slots, '0');
        }
    }

    /**
     * reserva slots disponíveis em um nicho
     * 
     * @param string $tam_nicho 'medio' ou 'grande'
     * @param int $qtd_slots Quantos slots precisa?
     */
    public function reserva_slots_nicho(string $tam_nicho, int $qtd_slots)
    {
        if ($tam_nicho == 'medio') {
            $nichos = $this->nichos_medios;
        } else {
            $nichos = $this->nichos_grandes;
        }

        foreach ($nichos as $nicho) {

        }
    }

    public function aloca_slot()
    {
    }

}
