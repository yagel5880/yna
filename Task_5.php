<?php
 
class CropRatio
{
    private $totalWeight;
    private $crops = [];
 
    public function add(string $name, int $cropWeight) : void
    {
        $currentCropWeight = 0;
        if(!array_key_exists($name, $this->crops)= ) {
            $this->crops[$name] = $currentCropWeight;
        }
 
        $currentCropWeight += $cropWeight;
        $this->totalWeight++;
    }
 
    public function proportion(string $name) : float
    {
        return $this->crops[$name] / $this->totalWeight;
    }
}
 
$cropRatio = new CropRatio;
$cropRatio->add('Wheat', 4);
$cropRatio->add('Wheat', 5);
$cropRatio->add('Rice', 1);
 
echo "Wheat: " . $cropRatio->proportion('Wheat');