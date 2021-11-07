<?php
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class MigrationsModelBase extends Model
{
    protected $table = 'migrations';

    public function getId()
    {
        return $this->id;
    }

    public function setId($migrations)
    {
        $this->id = $migrations;
    }
    public function getMigration()
    {
        return $this->migration;
    }

    public function setMigration($migrations)
    {
        $this->migration = $migrations;
    }
    public function getBatch()
    {
        return $this->batch;
    }

    public function setBatch($migrations)
    {
        $this->batch = $migrations;
    }
}
