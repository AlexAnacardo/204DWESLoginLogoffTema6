<?php
    class ErrorApp{
        private $codCuestion;
        private $descCuestion;
        private $numOrden;
        private $tipoRespuesta;
        private $listaopinionesCuestion;
        
        public function __construct($codCuestion, $descCuestion, $numOrden, $tipoRespuesta, $listaopinionesCuestion) {
            $this->codCuestion = $codCuestion;
            $this->descCuestion = $descCuestion;
            $this->numOrden = $numOrden;
            $this->tipoRespuesta = $tipoRespuesta;
            $this->listaopinionesCuestion = $listaopinionesCuestion;
        }

        public function getCodCuestion() {
            return $this->codCuestion;
        }

        public function getDescCuestion() {
            return $this->descCuestion;
        }

        public function getNumOrden() {
            return $this->numOrden;
        }

        public function getTipoRespuesta() {
            return $this->tipoRespuesta;
        }

        public function getListaopinionesCuestion() {
            return $this->listaopinionesCuestion;
        }

        public function setCodCuestion($codCuestion): void {
            $this->codCuestion = $codCuestion;
        }

        public function setDescCuestion($descCuestion): void {
            $this->descCuestion = $descCuestion;
        }

        public function setNumOrden($numOrden): void {
            $this->numOrden = $numOrden;
        }

        public function setTipoRespuesta($tipoRespuesta): void {
            $this->tipoRespuesta = $tipoRespuesta;
        }

        public function setListaopinionesCuestion($listaopinionesCuestion): void {
            $this->listaopinionesCuestion = $listaopinionesCuestion;
        }


    }
?>

