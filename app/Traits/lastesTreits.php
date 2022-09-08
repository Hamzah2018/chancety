<?php
namespace App\Traits;
trait LastestTrait
{
        public function getLastData(){
            $last = $this->orderBy('created_at', 'desc')->limit(4)->get();
            return $last;
        }
}
