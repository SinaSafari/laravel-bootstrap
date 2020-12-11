@extends('Doc.devlayout')

@section('devcontent')

    <div class="mt-5">
        <h1 class="text-center mb-5">Blade documentation</h1>
        <div class="row">

            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        If Statements
                    </div>
                    <div class="card-body text-left">
                        <div class="card-code">
                        <pre><code class="text-white">
<span>@</span>if (count($records) === 1)
    I have one record!
<span>@</span>elseif (count($records) > 1)
    I have multiple records!
<span>@</span>else
    I don't have any records!
<span>@</span>endif</code></pre>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Loops
                    </div>
                    <div class="card-body py-0">
                        <em >For lopping through repetitive parts</em>
                        <pre class="card-code mt-3"><code class="text-white"><span>@</span>foreach ($users as $user)
    <span><</span>p>This is user { { $user->id } }<span><</span>/p>
<span>@</span>endforeach

<span>@</span>forelse ($users as $user)
    <span><</span>li>{ { $user->name } }<span><</span>/li>
<span>@</span>empty
    <span><</span>p>No users<span><</span>/p>
<span>@</span>endforelse
</code></pre>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Partials
                    </div>
                    <div class="card-body">
                        <em>in partial file</em>
                        <div class="card-code">

                            <pre><code
                                    class="text-white"><span><</span>h1>hello from partial file <span><</span>/h1></code></pre>
                        </div>

                        <em>in file that we want to use the partial</em>
                        <div class="card-code">
<pre><code class="text-white mx-2">
<span>@</span>include('partial/partialFile')
</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

