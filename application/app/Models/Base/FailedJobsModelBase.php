<?php
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class FailedJobsModelBase extends Model
{
    protected $table = 'failed_jobs';

    public function getId()
    {
        return $this->id;
    }

    public function setId($failedJobs)
    {
        $this->id = $failedJobs;
    }
    public function getConnection()
    {
        return $this->connection;
    }

    public function setConnection($failedJobs)
    {
        $this->connection = $failedJobs;
    }
    public function getQueue()
    {
        return $this->queue;
    }

    public function setQueue($failedJobs)
    {
        $this->queue = $failedJobs;
    }
    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($failedJobs)
    {
        $this->payload = $failedJobs;
    }
    public function getException()
    {
        return $this->exception;
    }

    public function setException($failedJobs)
    {
        $this->exception = $failedJobs;
    }
    public function getFailedAt()
    {
        return $this->failed_at;
    }

    public function setFailedAt($failedJobs)
    {
        $this->failed_at = $failedJobs;
    }
}
