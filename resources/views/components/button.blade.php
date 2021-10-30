<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-himaraGold-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-himaraGold-500 active:bg-himaraGold-500 focus:outline-none focus:border-himaraGold-500 focus:ring ring-himaraGold-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
