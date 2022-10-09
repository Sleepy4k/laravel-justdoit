<?php

namespace App\Services\Page\Main;

use App\Contracts\Models;
use App\Traits\ViewChecker;

class TaskService
{
    use ViewChecker;

    /**
     * @var taskInterface
     */
    private $taskInterface;

    /**
     * Account service constructor.
     * 
     * @param App\Contracts\Models\TaskInterface $taskInterface
     */
    public function __construct(Models\TaskInterface $taskInterface)
    {
        $this->taskInterface = $taskInterface;
    }

    /**
     * Index function.
     * 
     * @param $path
     */
    public function index($path)
    {
        if ($this->checkView($path)) {
            return [
                'isDone' => config('enum.task.isDone'),
                'priority' => config('enum.task.priority'),
                'tasks' => $this->taskInterface->all(['*'], [], [['user', request()->user()->id]])
            ];
        }
    }

    /**
     * Store function.
     * 
     * @param $request
     */
    public function store($request)
    {
        $this->taskInterface->create($request);
 
        return toastr()->success('Tugas berhasil di tambahkan', 'Task');
    }

    /**
     * Show function.
     * 
     * @param $path
     * @param $id
     */
    public function show($path, $id)
    {
        if ($this->checkView($path)) {
            return [
                'task' => $this->taskInterface->findByCustomId([['user', request()->user()->id], ['id', $id]])
            ];
        }
    }

    /**
     * Edit function.
     * 
     * @param $path
     * @param $id
     */
    public function edit($path, $id)
    {
        if ($this->checkView($path)) {
            return [
                'isDone' => config('enum.task.isDone'),
                'priority' => config('enum.task.priority'),
                'task' => $this->taskInterface->findByCustomId([['user', request()->user()->id], ['id', $id]])
            ];
        }
    }

    /**
     * Update function.
     * 
     * @param $request
     * @param $id
     */
    public function update($request, $id)
    {
        $this->taskInterface->update($id, $request);

        return toastr()->success('Tugas berhasil di ubah', 'Task');
    }
    
    /**
     * Destroy function.
     * 
     * @param $id
     */
    public function destroy($id)
    {
        $this->taskInterface->deleteById($id);
        
        return toastr()->success('Tugas berhasil di hapus', 'Task');
    }
}