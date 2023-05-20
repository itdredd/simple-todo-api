# A simple test application that acts as a task manager.

# Endpoints:
- GET /tasks — get all tasks;
- POST /tasks — create a task;
- GET /tasks/id — get the task;
- PUT /tasks/id — update the task;
- DELETE /tasks/id — delete the task.

## Task structure:
- title;
- description;
- status.

## Getting Started

```sh
  ./vendor/bin/sail up
  ```