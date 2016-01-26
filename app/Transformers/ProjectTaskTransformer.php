<?php

namespace CodeProject\Transformers;

use CodeProject\Entities\ProjectTask;
use League\Fractal\TransformerAbstract;

class ProjectTaskTransformer extends TransformerAbstract {

	public function transform(ProjectTask $task) {

		return [
			'id' => $task->id,
			'name' => $task->name,
			'start_date' => $task->start_date,
			'due_date' => $task->due_date,
			'status' => $task->status,
		];
	}
}
