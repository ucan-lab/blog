<div class="sidebar">
    <div class="card card-gray">
        <div class="card-header">
            <h2>カテゴリ一覧</h2>
        </div>
        <div class="card-content">
            <ul class="categories">
                @foreach ($categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
