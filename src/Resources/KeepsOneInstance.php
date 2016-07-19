<?php

namespace Game\Resources;

interface KeepsOneInstance {
    public static function instance();
}