<x-template page-title="Todos os Projetos">

    <section class="bg-gray-900 dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto my-10">
            <h1 class="text-4xl font-bold mb-8 text-white">Todos os projetos</h1>
            <div class="grid grid-cols-2 gap-8 mt-8 md:mt-16 md:grid-cols-3">
                @foreach ($projects as $project)
                    <div class="max-w-sm bg-gray-800 border border-gray-700 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transform transition-transform duration-300 hover:scale-105">
                        <a href="#">
                            <div class="flex justify-center items-center">
                                <img class="rounded-t-lg" src="{{ $project->technology_image }}" alt=""/>
                            </div>
                        </a>
                        <div class="p-5 flex flex-col">
                            <a href="#" class="mb-2">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $project->project_name }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-400 dark:text-gray-400">{{ $project->description }}</p>
                            <span class="pt-5 text-sm text-gray-300 dark:text-gray-300">{{ $project->date }}</span>
                            <a href="#"
                               class="mt-5 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700t focus:ring-4 focus:outline-none focus:ring-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Saiba Mais
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-template>
