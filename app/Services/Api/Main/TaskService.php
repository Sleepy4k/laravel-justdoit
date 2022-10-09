<?php

namespace App\Services\Api\Main;

use App\Contracts\Models;
use App\Traits\ApiRespons;
use App\Traits\RandomNumber;
use App\Http\Resources\Main\TaskResource;

class TaskService
{
    use RandomNumber, ApiRespons;

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
     */
    public function index()
    {
        try {
            $task_list = $this->taskInterface->all(['*'], [], [['user', auth('api')->user()->id]]);

            if (count($task_list) > 0) {
                return $this->createResponse(200, 'Data berhasil diterima',
                    [
                        'data' => TaskResource::collection($task_list)
                    ],
                    [
                        route('api.task.index')
                    ]
                );
            } else {
                return $this->createResponse(200, 'Data berhasil diterima',
                    [
                        'data' => 'Tidak ada data yang tersedia'
                    ],
                    [
                        route('api.task.index')
                    ]
                );
            }
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.task.index')
                ]
            );
        }
    }

    /**
     * Store function.
     * 
     * @param $request
     */
    public function store($request)
    {
        try {
            $request['user'] = auth('api')->user()->id;

            $this->taskInterface->create($request);

            return $this->createResponse(201, 'Data berhasil dibuat', [],
                [
                    route('api.task.store')
                ]
            );
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.task.store')
                ]
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request)
    {
        try {
            $id = $request['id'];

            unset($request['id']);

            $this->taskInterface->update($id, $request);

            return $this->createResponse(202, 'Data berhasil diubah', [],
                [
                    route('api.task.update')
                ]
            );
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.task.update')
                ]
            );
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        try {
            $id = $request['id'];

            unset($request['id']);

            $this->taskInterface->deleteById($id);

            return $this->createResponse(204, 'Data berhasil diubah', [],
                [
                    route('api.task.destroy')
                ]
            );
        } catch (\Throwable $th) {
            return $this->createResponse(500, 'Server Error',
                [
                    'error' => $th->getMessage()
                ],
                [
                    route('api.task.destroy')
                ]
            );
        }
    }
}