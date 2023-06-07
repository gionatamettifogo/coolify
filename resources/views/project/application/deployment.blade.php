<x-layout>
    <h1 class="py-0">Deployment</h1>
    <div class="pb-10 text-sm breadcrumbs">
        <ul>
            <li><a
                    href="{{ route('project.show', ['project_uuid' => request()->route('project_uuid')]) }}">{{ $application->environment->project->name }}</a>
            </li>
            <li><a
                    href="{{ route('project.resources', ['environment_name' => request()->route('environment_name'), 'project_uuid' => request()->route('project_uuid')]) }}">{{ request()->route('environment_name') }}</a>
            </li>
            <li>{{ data_get($application, 'name') }}</li>
            <li>
                <livewire:project.application.status :application="$application" />
            </li>
        </ul>
    </div>
    <x-applications.navbar :application="$application" />
    <livewire:project.application.deployment-logs :activity="$activity" :application="$application" :deployment_uuid="$deployment_uuid" />
</x-layout>