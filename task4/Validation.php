<?php


class Validation
{

    private array $validations = [];

    private array $data = [];
    private array $erorrs = [];

    public function __construct()
    {
        $this->setData();
    }
    public function setData()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $this->data = $_POST;
        }
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $this->data = $_GET;
        }
    }

    public function getErrors(): array
    {
        return $this->erorrs;
    }
    public function setvalidations(array $validations)
    {
        $this->validations = $validations;
    }

    public function validate(array $validations)
    {
        $this->setvalidations($validations);

        foreach ($this->validations as $key => $fieldRules) {
            foreach ($fieldRules  as $rule) {
                $ruleParts = explode(":", $rule);
                $rule = $ruleParts[0];
                if ($ruleParts[0] == 'min' or $ruleParts[0] == 'max') {
                    $this->$rule($key, $this->data[$key], $ruleParts[1]);
                } else {
                    $this->$rule($key, $this->data[$key]);
                }
            }
        }
    }
    public function required($fieldName, $input)
    {
        if (empty($input)) {
            $this->erorrs[] = "$fieldName is required";
        }
    }

    public function min($fieldName, $input, $length)
    {
        if (strlen($input) < $length) {
            $this->erorrs[] = "$fieldName must be at least $length characters";
        }
    }

    public function max($fieldName, $input, $length)
    {
        if (strlen($input) > $length) {
            $this->erorrs[] = "$fieldName must be at most $length characters";
        }
    }
    public function email($field, $value)
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->erorrs[] = "$field must be a valid email address";
        }
    }
}
