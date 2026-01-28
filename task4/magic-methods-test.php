<?php

class MagicClass
{
    private array $data = [];

    public function __get($property)
    {
        return $this->data[$property] ?? null;
    }

    public function __set($property, $value)
    {
        $this->data[$property] = $value;
    }

    public function __call($method, $arguments)
    {
        return "Method [$method] not found with args: " . implode(', ', $arguments);
    }

    public static function __callStatic($method, $arguments)
    {
        return "Static method [$method] not found with args: " . implode(', ', $arguments);
    }

    public function __toString()
    {
        return json_encode($this->data, JSON_PRETTY_PRINT);
    }

    public function __invoke($key = null)
    {
        if ($key) {
            return $this->data[$key] ?? null;
        }

        return $this->data;
    }

    public function __clone()
    {
        foreach ($this->data as $key => $value) {
            if (is_object($value)) {
                $this->data[$key] = clone $value;
            }
        }
    }
}

$obj = new MagicClass();

$obj->name = "Fady";
$obj->role = "Backend Developer";



echo $obj->undefinedMethod(1, 2);

echo MagicClass::staticTest("hello");

print_r($obj());      
echo $obj('role');      

echo $obj;

$clone = clone $obj;
$clone->name = "Emad";

echo $obj->name;   
echo $clone->name; 

