@extends('layouts.app')

@section('template_title')
    {{ $project->name ?? "{{ __('Show') Project" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Project</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Value:</strong>
                            {{ $project->value }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $project->content }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
