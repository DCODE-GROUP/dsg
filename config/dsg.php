<?php

return [
    'buttons' => [
        'default' => 'rounded-lg text-sm text-center font-semibold flex justify-center items-center gap-1',
        'sizes' => [
            'sm' => [
                'default' => 'py-2 px-3',
                'icon' => 'p-2',
            ],
            'md' => [
                'default' => 'py-2.5 px-3.5',
                'icon' => 'p-2.5',
            ],
            'lg' => [
                'default' => 'py-2.5 px-4',
                'icon' => 'p-3',
            ],
            'xl' => [
                'default' => 'py-3 px-4.5',
                'icon' => 'p-3.5',
            ],
            '2xl' => [
                'default' => 'py-4 px-5.5',
                'icon' => 'p-4',
            ],
        ],
        'primary' => [
            'default' => 'cursor-pointer bg-brand-600 text-white hover:bg-brand-700',
            'disabled' => 'pointer-events-none cursor-not-allowed border border-gray-200 bg-gray-100 text-gray-400',
        ],
        'secondary' => [
            'default' => 'cursor-pointer bg-white text-slate-600 hover:text-slate-700 border border-slate-300 hover:border-slate-400',
            'disabled' => 'pointer-events-none cursor-not-allowed bg-white text-slate-400 border border-slate-300',
        ],
        'tertiary' => [
            'default' => 'cursor-pointer text-slate-600 hover:text-slate-700 hover:bg-slate-100',
            'disabled' => 'pointer-events-none cursor-not-allowed text-slate-400',
        ],
        'link' => [
            'default' => 'cursor-pointer text-primary-600 hover:text-primary-700',
            'disabled' => 'pointer-events-none cursor-not-allowed text-slate-400',
        ],
        'destructive' => [
            'primary' => [
                'default' => 'cursor-pointer bg-red-600 text-white hover:bg-red-700',
                'disabled' => 'pointer-events-none cursor-not-allowed bg-slate-100 text-slate-400',
            ],
            'secondary' => [
                'default' => '',
                'disabled' => '',
            ],
            'tertiary' => [
                'default' => '',
                'disabled' => '',
            ],
            'link' => [
                'default' => '',
                'disabled' => '',
            ],
        ]
    ],

    'forms' => [
        'label' => 'inline-block text-xs font-medium',
        'input' => [
            'default' => 'rounded-lg border border-slate-300 text-slate-600 placeholder:text-slate-400 focus:border-slate-300 text-sm w-full',
            'readonly' => [
                'on' => 'pointer-events-none cursor-not-allowed bg-slate-100 focus:shadow-[none] hover:border-slate-300',
                'off' => 'hover:border-slate-400',
            ],
        ],
        'file' => [
            'default' => 'cursor-pointer w-24 h-24 flex items-center justify-center rounded hover:border hover:border-slate-300',
            'preview' => [
                'off' => 'border border-slate-200 group',
            ],
        ],
        'uploader' => [
            'wrapper' => 'focus-visible:outline-0 h-52 xl:h-56 p-3 pb-2 flex justify-center items-center rounded-xl border border-slate-200 bg-white max-w-full text-center flex flex-col items-center space-y-3',
            'icon_wrapper' => 'text-slate-700 w-10 h-10 flex justify-center items-center border border-slate-200 rounded-lg',
            'drag_drop_text' => 'text-slate-600',
            'extra_message' => 'text-xs text-slate-500',

        ],
        'upload-item' => [
            'wrapper' => 'flex p-4 rounded-xl border border-slate-200 space-x-2',
            'title' => 'font-medium text-slate-700 break-all text-sm',
            'size' => 'text-slate-500 text-sm',
            'delete_button' => 'w-6 h-6 !p-0 flex justify-center items-center absolute -right-2 -bottom-2',
            'delete_icon' => 'w-4 h-4 text-slate-600',
        ],
        'color' => 'min-w-[2.25rem] min-h-[2.25rem] rounded-lg',
        'search' => 'h-4 w-4 text-slate-400 group-hover:text-slate-400 absolute left-3 top-1/2 -translate-y-1/2',
        'hint' => 'hidden group-hover:block absolute top-full right-0 mt-1 p-2 w-48 rounded-lg bg-white shadow-md',
        'checkbox' => [
            'input' => [
                'default' => 'h-4 w-4 rounded focus:ring-transparent',
                'readonly' => [
                    'on' => 'pointer-events-none cursor-not-allowed border-slate-200 bg-slate-50 text-slate-300 checked:border-slate-200 checked:text-slate-300 checked:bg-slate-50 checked:hover:border-slate-200 checked:hover:text-slate-300 checked:hover:bg-slate-50 checked:focus:border-slate-200 checked:focus:text-slate-300 checked:focus:bg-slate-50',
                    'off' => 'border-slate-300 bg-white',
                ],
            ],
            'label' => [
                'default' => 'block ml-2 text-sm text-slate-700',
                'readonly' => [
                    'on' => 'pointer-events-none',
                ],
            ],
        ],
        'error' => 'mb-1 text-xs text-red-600',
        'help' => 'mb-1 text-xs text-slate-500',
        'radio' => [
            'field' => 'grid sm:grid-cols-2 gap-4 mt-3',
            'wrapper' => 'flex items-center space-x-2',
            'input' => 'h-5 w-5 border-slate-300 focus:ring-transparent',
            'label' => 'block text-sm text-slate-700',
        ],
        'iconpicker' => [
            'opener' => 'w-12 h-12 flex justify-center items-center text-primary-600 bg-primary-50 hover:bg-primary-100 rounded-full',
            'window' => 'p-4 rounded-lg shadow-md bg-white absolute top-full left-0 w-[15.5rem] h-[18.75rem] z-10 flex flex-col',
            'list' => 'text-slate-700 grid grid-cols-[1.5rem,1.5rem,1.5rem,1.5rem,1.5rem] overflow-y-scroll gap-y-5 justify-between',
            'icon' => 'hover:text-slate-900',
        ],
    ],

    //    'badges' => [
    //        'base' => 'inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset',
    //        'levels' => [
    //            'gray' => 'bg-gray-50 text-gray-600 ring-gray-500/10',
    //            'yellow' => 'bg-yellow-50 text-yellow-800 ring-yellow-600/20',
    //            'red' => 'bg-red-50 text-red-700 ring-red-600/10',
    //            'green' => 'bg-green-50 text-green-700 ring-green-600/20',
    //            'blue' => 'bg-blue-50 text-blue-700 ring-blue-700/10',
    //        ],
    //    ],

    'drop_down' => [
        'button' => 'p-2 hover:bg-slate-50 rounded-lg text-slate-600',
        'menu' => [
            'wrapper' => 'absolute top-full right-0 bg-white py-2 space-y-1 shadow-md rounded-lg z-10 min-w-40 text-slate-600',
            'item' => 'w-full text-left whitespace-nowrap p-2 hover:bg-slate-200 flex items-center space-x-2 cursor-pointer',
        ],
    ],

    'sidebar' => [
        'wrapper' => 'space-y-2 p-4 font-medium text-slate-600',
        'item' => [
            'default' => 'group flex items-center space-x-2 rounded-lg px-4 py-3 hover:bg-slate-200',
            'active' => [
                'on' => 'bg-slate-200 font-semibold',
            ],
            'child' => [
                'default' => 'group flex items-center space-x-2 rounded-lg px-4 py-3',
                'active' => [
                    'on' => 'bg-slate-200 font-semibold',
                ],
            ],
        ],
    ],

    'tab' => [
        'frame' => [
            'default' => 'border-slate-200',
            'horizontal' => 'border-b',
            'vertical' => '',
        ],
        'wrapper' => [
            'default' => 'font-medium text-slate-400 flex',
            'horizontal' => '-mb-px space-x-4',
            'vertical' => 'flex-col space-y-4',
        ],
        'item' => [
            'default' => 'cursor-pointer whitespace-nowrap pb-1 pl-2',
            'active' => [
                'on' => [
                    'horizontal' => 'border-b-2 border-primary-700 font-semibold text-primary-700',
                    'vertical' => 'border-l-2 border-primary-700 font-semibold text-primary-700',
                ],
                'off' => [
                    'horizontal' => 'hover:border-primary-700 hover:text-primary-700',
                    'vertical' => 'hover:border-primary-700 hover:text-primary-700',
                ],
            ],
            'disabled' => [
                'on' => 'pointer-events-none !border-none !text-slate-400',
            ],
        ],
    ],

    'modals' => [
        'background' => 'absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity',
        'window' => 'fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 overflow-x-hidden rounded-lg bg-white shadow-md transition-all relative z-10 min-w-60 max-w-full max-h-full',
    ],

    'notifications' => [
        'default' => [
            'wrapper' => 'flex items-center top-[4.5rem] right-6 z-50 fixed max-w-96 overflow-hidden rounded-lg bg-green-50 ring-1 ring-green-700 py-2 px-3 space-x-2',
            'message' => 'flex-1 text-green-700 flex w-56',
        ],
        'bubble' => [
            'wrapper' => 'flex items-center space-x-2 rounded-lg ring-1 py-2 px-3',
            'message' => 'flex-1 font-medium ',
        ],
    ],

    'breadcrumb' => [
        'wrapper' => 'text-slate-500 text-sm font-medium flex',
        'item' => 'text-slate-700 font-semibold',
        'divider' => 'text-slate-300 font-semibold w-5 mx-3',
    ],

    'tag' => 'inline-block bg-neutral-100 py-1 px-2.5 rounded-full font-medium',

    'cards' => [
        'list_item' => [
            'default' => [
                'wrapper' => 'bg-white p-4 rounded-lg flex relative',
                'gallery' => [
                    'image' => 'object-cover rounded',
                    'buttons' => [
                        'wrapper' => 'text-slate-600 absolute bottom-2 left-1/2 -translate-x-1/2 flex space-x-2',
                        'default' => 'w-7 h-7 bg-white flex justify-center items-center rounded-full',
                        'active' => 'opacity-50 pointer-events-none',
                    ],
                ],
                'image_icon' => 'w-6 h-6 flex justify-center items-center absolute',
                'content_wrapper' => 'flex flex-col flex-1',
                'head' => 'flex flex-col space-y-2',
                'header' => 'flex items-center',
                'title' => 'font-bold text-2xl',
                'right_side' => 'flex justify-end items-center flex-1 min-w-24 space-x-2',
                'footer' => 'flex-1 flex items-end',
            ],
            'vertical' => [
                'wrapper' => 'flex-col',
                'gallery' => [
                    'image' => 'w-full h-40',
                ],
                'right_side' => 'absolute top-1 right-4',
                'footer' => 'flex-col space-y-2',
            ],
            'horizontal' => [
                'wrapper' => 'flex-col lg:flex-row',
                'gallery' => [
                    'image' => 'w-full h-40 lg:w-80 lg:h-56',
                ],
                'right_side' => 'absolute top-1 right-4 lg:relative lg:top-0 lg:right-0',
                'footer' => 'flex-col space-y-2 lg:flex-row lg:space-y-0',
            ],
        ],
        'narrow' => [
            'wrapper' => 'bg-white p-4 rounded-lg flex space-x-2',
            'image' => 'w-[4.5rem] h-[4.5rem] rounded object-cover',
            'image_icon' => 'w-6 h-6 flex justify-center items-center absolute top-2 left-2',
            'content_wrapper' => 'flex-1 flex flex-col space-y-2',
            'title' => 'text-base font-bold leading-5',
            'footer' => 'flex-1 flex items-end',
        ],
    ],
    'slideshow' => [
        'wrapper' => 'fixed inset-0 bg-neutral-700 z-50 flex justify-center items-center',
        'container' => 'flex flex-col w-full space-y-3.5',
        'heading' => 'text-white text-base font-bold text-center',
        'body' => 'flex-1 flex',
        'button_wrapper' => 'flex-1 flex justify-center items-center',
        'button' => 'w-9 h-9 bg-white flex justify-center items-center rounded-full text-slate-600 hover:text-slate-700',
        'image_wrapper' => 'w-[72vw] h-[80vh] flex justify-center items-center',
        'image' => 'object-cover max-w-full max-h-full rounded',
        'close_button' => 'absolute top-12 right-[7%] text-white translate-x-1/2',
    ],
];
