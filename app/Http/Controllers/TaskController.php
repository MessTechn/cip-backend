<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Traits\EnumeratesValues;

class TaskController extends Controller
{

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Task::all();
    }


    /**
     * @param StoreTaskRequest $request
     * @return Task
     */
    public function store(StoreTaskRequest $request): Task
    {
        $task = new Task();
        $task->title = $request->get('title');
        $task->save();

        return $task;
    }


    /**
     * @param Task $task
     * @return Task
     */
    public function show(Task $task): Task
    {
        return $task;
    }


    /**
     * @param UpdateTaskRequest $request
     * @param Task $task
     * @return Task
     */
    public function update(UpdateTaskRequest $request, Task $task): Task
    {
        $task->update($request->all());
        return $task;
    }

    /**
     * @param Task $task
     * @return true
     */
    public function destroy(Task $task): bool
    {
        $task->delete();
        return true;
    }

    /**
     * @return Collection
     */
    public function indexOpen(): Collection
    {
        return Task::all()->where('completed', '=', false);
    }

    /**
     * @return Collection
     */
    public function indexDone(): Collection
    {
        return Task::all()->where('completed', '=', true);
    }

    public function destroyAll(): bool
    {
        $tasks = Task::all();
        foreach ($tasks as $task) {
            $task->delete();
        }

        return true;
    }
}
