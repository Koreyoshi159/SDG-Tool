@extends('common.master')

@section('content')
    <div class="" style="padding: 10%">
        <div class="columns">
            <div class="column is-6 is-narrow">
                <div class="card" style="width: 500px">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Blogs
                                <h1 style="padding-left: 50%">
                                    <button class="" style="">
                                        <p>Add a Blog</p>
                                    </button>
                                </h1>
                            </header>
                            Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi
                            porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-6 is-narrow">
                <div class="card" style="width: 500px">
                    <div class="card-content">
                        <div class="content">
                            <header class="card-header-title columns">Blogs
                                <h1 style="padding-left: 50%">
                                    <button class="" style="">
                                        <p>Add a Blog</p>
                                    </button>
                                </h1>
                            </header>
                            Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi
                            porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="" style="padding-top: 10%">
            <div class="columns">
                <div class="column is-6 is-narrow">
                    <div class="card" style="width: 500px">
                        <div class="card-content">
                            <div class="content">
                                <header class="card-header-title columns">Courses
                                    <h1 style="padding-left: 50%">
                                        <button class="" style="">
                                            <a href="/course/create">Add a Course</a>
                                        </button>
                                    </h1>
                                </header>
                                <div class="container">
                                    <table>
                                        <tbody>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{$course->name}}</td>
                                                <td>
                                                    <button class="has-text-right"><a href="\">Edit</a></button>
                                                </td>
                                                <td>
                                                    <button class="has-text-right"><a href="\">Delete</a></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-6 is-narrow">
                    <div class="card" style="width: 500px">
                        <div class="card-content">
                            <div class="content">
                                <header class="card-header-title columns">Research Groups
                                    <h1 style="padding-left: 50%">
                                        <button class="" style="">
                                            <a href=" {{route('research_groups.create')}}">Add a Group</a>
                                        </button>
                                    </h1>
                                </header>
                                <div class="container">
                                    <table>
                                        <tbody>
                                        @foreach($researchGroups as $researchGroup)
                                            <tr>
                                                <td>{{$researchGroup->name}}</td>
                                                <td>
                                                    <button class="has-text-right"><a href="\">Edit</a></button>
                                                </td>
                                                <td>
                                                    <button class="has-text-right"><a href="\">Delete</a></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
