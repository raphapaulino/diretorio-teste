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
        // var_dump($this->nichos_grandes);
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
            ...
            ...
            'G1' = ['0','0','0','0','0','0','0','0',]
            'G2' = ['0','0','0','0','0','0','0','0',]
            
            M = MÉDIO
            G = GRANDE
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
        $num_alocados = 0;

        if ($tam_nicho == 'medio') {
            $nichos = &$this->nichos_medios;
        } else {
            $nichos = &$this->nichos_grandes;
        }

        // refazer essa gambi com array_walk ou array_map
        foreach ($nichos as $cod_nicho => &$slots) {
            if ($num_alocados == $qtd_slots) {
                break;
            }

            // Varre os slots e os aloca
            foreach ($slots as &$slot) {
                if ($num_alocados == $qtd_slots) {
                    break;
                }
                // Se está vazio, aloca
                if ($slot == '0') {
                    $slot = '1';

                    $num_alocados++;
                }
            }
        }
    }

    /**
     * Mostra nichos médios e seus conteúdos
     */
    public function echo_nichos_medios()
    {
        foreach ($this->nichos_medios as $nicho => $conteudo) {
            echo "<tr>";

            echo "<td>" . $nicho . "</td>";

            echo "<td>";
            foreach ($conteudo as $slot) {
                // Se está vazio...
                if ($slot == '0') {
                    echo '<i class="fas fa-check-square green"></i>';
                } else {
                    echo '<i class="fas fa-mobile-alt red"></i>';
                }
            }
            echo "</td>";

            echo "</tr>";
        }
    }
    // REPETIR PARA NICHOS GRANDES OU ADAPTAR PARA REUSO

    /**
     * Mostra o resultado final do array
      */
    public function __destruct()
    {
        echo "<h6>DEBUGGING - array final </h6>";
        var_dump($this->nichos_medios);
    }
}
