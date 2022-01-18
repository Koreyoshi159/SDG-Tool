@extends('common.master')

@section('content')
    <div class="padding-card">
        <div class="columns">
            <div class="column is-full">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Pending Blogs
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('blogs.create') }}">Add a Blog!</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    <th class="content-width2">Description</th>
                                    <th class="content-width2">E-mail</th>
                                    <th class="content-width2">Created at</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    @forelse($blogs as $blog)
                                        @if(!$blog->visibility)
                                            <tr>
                                                <td>{{ $blog->description }}</td>
                                                <td>{{ $blog->contact_email }}</td>
                                                <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <button class="button is-small is-light">
                                                        <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('blogs.destroy', $blog) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button is-small is-light">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="blogs/changevisibility/{{ $blog->id }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button class="button is-small is-light">Approve</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-full">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Blogs
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    <th class="content-width2">Description</th>
                                    <th class="content-width2">Type of Activity</th>
                                    <th class="content-width2">Publisher</th>
                                    <th></th>
                                    <th></th>
                                    @forelse($blogs as $blog)
                                        @if($blog->visibility)
                                            <tr>
                                                <td>{{ $blog->description }}</td>
                                                <td>{{ $blog->activity->name }}</td>
                                                <td>{{ $blog->contact_name }}</td>
                                                <td>
                                                    <button class="button is-small is-light">
                                                        <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form method="POST"
                                                          action="{{ route('blogs.destroy', $blog) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="button is-small is-light">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Programs
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('programs.create') }}">Add a Program</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($programs as $program)
                                        <tr>
                                            <td class="content-width">{{$program->name}}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('programs.edit', $program) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('programs.destroy', $program) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Research Groups
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('research_groups.create') }}">Add a Research Group</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($researchGroups as $researchGroup)
                                        <tr>
                                            <td class="content-width">{{ $researchGroup->name }}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('research_groups.edit', $researchGroup) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('research_groups.destroy', $researchGroup) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Type of Activities
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('activities.create') }}">Add a Type of Activity</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($activities as $activity)
                                        <tr>
                                            <td class="content-width">{{ $activity->name }}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('activities.edit', $activity) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('activities.destroy', $activity) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Business Operations
                                <h1 class="column has-text-right content-margin">
                                    <button class="button is-light">
                                        <a href="{{ route('business_operations.create') }}">Add a Business Operation</a>
                                    </button>
                                </h1>
                            </header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($businessOperations as $businessOperation)
                                        <tr>
                                            <td class="content-width">{{ $businessOperation->name }}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('business_operations.edit', $businessOperation) }}">Edit</a>
                                                </button>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                      action="{{ route('business_operations.destroy', $businessOperation) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button is-small is-light">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">SDG Excerpts</header>
                            <div class="container fixed-height">
                                <table>
                                    <tbody>
                                    @forelse($sdgs as $sdg)
                                        <tr>
                                            <td class="content-width">{{ $sdg->id }}. {{ $sdg->name }}</td>
                                            <td>
                                                <button class="button is-small is-light">
                                                    <a href="{{ route('sdgs.edit', $sdg) }}">Edit</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This block is currently empty</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
