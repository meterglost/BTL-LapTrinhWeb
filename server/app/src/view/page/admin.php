<main class="w-screen h-screen overflow-hidden flex flex-row items-strech">
    <div id="category" class="basis-1/6 border-r p-5 group">
        <div class="flex flex-col gap-y-2 text-base">
            <div class="flex flex-row items-center mb-10">
                <div id="category-toggle" class="rounded-full hover:bg-zinc-100">
                    <div>
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div class="flex-none">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>Overview</span>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-rectangle-history"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>Products</span>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>News</span>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>Customers</span>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>category</span>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>category</span>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="group-[.basis-0]:hidden">
                    <span>category</span>
                </div>
            </div>
        </div>
    </div>
    <div id="filter" class="basis-1/6 border-r p-5 group">
        <div class="flex flex-col gap-y-2 text-base">
            <div class="mb-10 flex flex-row items-center">
                <div id="filter-toggle" class="rounded-full hover:bg-zinc-100">
                    <div>
                        <i class="fa-solid fa-filter-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="items" class="flex-1 px-10 py-5">
        <div class="flex flex-row justify-between items-center mb-2.5">
            <div>
                <span>Show</span>
                <select name="item_per_page" id="item_per_page" class="outline-none rounded-md border p-2 m-2">
                    <option value="">10</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">100</option>
                </select>
                <span>items per page</span>
            </div>
            <div class="flex flex-row items-center gap-x-5">
                <span>Page</span>
                <div class="page-nav">
                    <div><i class="fa-regular fa-angles-left"></i></div>
                    <div>1</div>
                    <div>2</div>
                    <div>3</div>
                    <div>...</div>
                    <div><i class="fa-regular fa-angles-right"></i></div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <div class="rounded-md border p-2.5">Items</div>
            <div class="rounded-md border p-2.5">Items</div>
            <div class="rounded-md border p-2.5">Items</div>
            <div class="rounded-md border p-2.5">Items</div>
            <div class="rounded-md border p-2.5">Items</div>
        </div>
    </div>
</main>

<script>
    $("#category-toggle").on("click", function() {
        $("#category").toggleClass("basis-1/6 basis-0");
    });

    $("#filter-toggle").on("click", function() {
        $("#filter").toggleClass("basis-1/6 basis-0");
    });
</script>
