
<?php
// controllers/CorridaController.php
class CorridaController {
    public function cadastrarCorrida($pista, $data, $pilotos) {
        // Crie um objeto Corrida e adicione ao array de corridas
        $corrida = new Corrida();
        $corrida->id_corrida = count($corridas) + 1;
        $corrida->pista = $pista;
        $corrida->data = $data;
        $corrida->pilotos = $pilotos;

        $corridas[] = $corrida;
    }
}

// Outros controllers para cadastrar pilotos, pistas, etc.
?>
