<?php

class QueryBuilder
{
    private $fields = [];

    private $conditions = [];

    private $from = [];

    
    // Condition Where
    public function __toString(): string
    {
        $where = $this->conditions === [] ? '' : ' WHERE ' . implode(' AND ', $this->conditions);
        return 'SELECT' . implode(' ', $this->fields)
            . 'FROM ' . implode(' ', $this->from) . $where;
    }
    
    // Condition Select
    public function select(string ...$select): self
    {
        $this->fields = $select;
        return $this;
    }

    public function from(string $table, ?string $alias = null): self
    {
        if($alias == null) {
            $this->from[] = $table;
        } else {
            $this->from[] = '${table} as ${alias}';
        }

        return $this;
    }
}
