<?php

class x0iInstaLastphotos extends CBitrixComponent {

    public function executeComponent () {
        $this->arResult = [
            'KEY1' => base64_encode(random_bytes(24)),
            'KEY2' => base64_encode(random_bytes(24)),
        ];
        $this->includeComponentTemplate();
    }

}
