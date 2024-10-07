<?php

return [
    'buttons' => [
        'default' => 'rounded-lg text-center font-semibold flex justify-center items-center gap-1',
        'icon' => 'w-7 h-7',
        'sizes' => [
            'sm' => [
                'default' => 'py-2 px-3 text-sm',
                'link' => 'text-sm',
                'with_icon' => 'p-2',
                'icon' => 'w-5 h-5',
            ],
            'md' => [
                'default' => 'py-2.5 px-3.5 text-sm',
                'link' => 'text-sm',
                'with_icon' => 'p-2.5',
                'icon' => 'w-5 h-5',
            ],
            'lg' => [
                'default' => 'py-2.5 px-4 text-base',
                'link' => 'text-base',
                'with_icon' => 'p-3',
                'icon' => 'w-5 h-5',
            ],
            'xl' => [
                'default' => 'py-3 px-4.5 text-base',
                'link' => 'text-base',
                'with_icon' => 'p-3.5',
                'icon' => 'w-5 h-5',
            ],
            '2xl' => [
                'default' => 'py-4 px-5.5 text-lg',
                'link' => 'text-lg',
                'with_icon' => 'p-4',
                'icon' => 'w-6 h-6',
            ],
        ],
        'primary' => [
            'default' => 'cursor-pointer bg-brand-600 text-white hover:bg-brand-700',
            'disabled' => 'pointer-events-none cursor-not-allowed border border-gray-200 bg-gray-100 text-gray-400',
        ],
        'secondary' => [
            'default' => 'cursor-pointer bg-white text-brand-600 hover:text-brand-800 hover:bg-brand-50 border border-brand-300 hover:border-brand-400',
            'disabled' => 'pointer-events-none cursor-not-allowed bg-white text-gray-400 border border-gray-200',
            'gray' => 'cursor-pointer bg-white text-gray-700 hover:text-gray-800 hover:bg-gray-50 border border-gray-300',
        ],
        'secondary_gray' => [
            'default' => 'cursor-pointer bg-white text-gray-700 hover:text-gray-800 hover:bg-gray-50 border border-gray-300',
            'disabled' => 'pointer-events-none cursor-not-allowed bg-white text-gray-400 border border-gray-200',
        ],
        'tertiary' => [
            'default' => 'cursor-pointer text-brand-600 hover:text-brand-700 hover:bg-brand-50',
            'disabled' => 'pointer-events-none cursor-not-allowed text-brand-400',
        ],
        'tertiary_gray' => [
            'default' => 'cursor-pointer text-gray-600 hover:text-gray-700 hover:bg-gray-50',
            'disabled' => 'pointer-events-none cursor-not-allowed text-gray-400',
        ],
        'link' => [
            'default' => 'cursor-pointer text-brand-600 hover:text-brand-700',
            'disabled' => 'pointer-events-none cursor-not-allowed text-brand-400',
        ],
        'link_gray' => [
            'default' => 'cursor-pointer text-gray-600 hover:text-gray-700',
            'disabled' => 'pointer-events-none cursor-not-allowed text-gray-400',
        ],
        'destructive' => [
            'primary' => [
                'default' => 'cursor-pointer bg-red-600 text-white hover:bg-red-700',
                'disabled' => 'pointer-events-none cursor-not-allowed bg-brand-100 text-gray-400',
            ],
            'secondary' => [
                'default' => 'cursor-pointer bg-white text-red-600 hover:text-red-800 hover:bg-red-50 border border-red-300 hover:border-red-400',
                'disabled' => 'pointer-events-none cursor-not-allowed bg-white text-red-400 border border-red-300',
            ],
            'tertiary' => [
                'default' => 'cursor-pointer text-red-600 hover:text-red-700 hover:bg-red-50 hover:bg-red-100',
                'disabled' => 'pointer-events-none cursor-not-allowed text-red-400',
            ],
            'link' => [
                'default' => 'cursor-pointer text-red-600 hover:text-red-700',
                'disabled' => 'pointer-events-none cursor-not-allowed text-red-400',
            ],
        ],
    ],

    'forms' => [
        'label' => 'text-gray-700 inline-block text-sm font-medium',
        'input' => [
            'default' => 'rounded-lg border border-slate-300 text-slate-600 placeholder:text-slate-400 focus:border-slate-300 text-sm w-full',
            'readonly' => [
                'on' => 'pointer-events-none cursor-not-allowed bg-slate-100 focus:shadow-[none] hover:border-slate-300',
                'off' => 'hover:border-slate-400',
            ],
            'textarea' => 'min-h-24 max-h-[calc(100vh-14rem)]',
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
        'search' => 'h-4 w-4 text-slate-400 group-hover:text-slate-400 absolute left-3 top-1/2 -translate-y-1/2 flex justify-center items-center',
        'hint' => 'hidden group-hover:block absolute top-full right-0 mt-1 p-2 w-48 rounded-lg bg-white shadow-md',
        'checkbox' => [
            'wrapper' => 'flex items-start',
            'input' => [
                'field' => 'mt-0.5',
                'default' => 'h-4 w-4 rounded focus:ring-transparent',
                'readonly' => [
                    'on' => 'pointer-events-none cursor-not-allowed border-gray-300 bg-gray-50 text-gray-300 checked:border-gray-300 checked:text-gray-300 checked:bg-gray-50 checked:hover:border-gray-300 checked:hover:text-gray-300 checked:hover:bg-gray-50 checked:focus:border-gray-300 checked:focus:text-gray-300 checked:focus:bg-gray-50',
                    'off' => 'border-gray-300 text-gray-300 checked:border-brand-600 checked:text-brand-600 checked:bg-brand-600 checked:hover:border-brand-600 checked:hover:text-brand-600 checked:hover:bg-brand-600 checked:focus:border-brand-600 checked:focus:text-brand-600 checked:focus:bg-brand-600',
                ],
            ],
            'label' => [
                'default' => 'block ml-2 text-sm text-slate-700',
                'readonly' => [
                    'on' => 'pointer-events-none',
                ],
            ],
        ],
        'error' => 'mt-1 text-sm text-error-500',
        'help' => 'mt-1 text-sm text-gray-600',
        'radio' => [
            'field' => 'grid sm:grid-cols-2 gap-4 mt-3',
            'wrapper' => 'flex items-center space-x-2',
            'label' => 'block text-sm text-gray-700',
            'input' => [
                'default' => 'text-brand-600 border-gray-300 focus:ring-transparent',
                'sizes' => [
                    'sm' => 'h-4 w-4',
                    'md' => 'h-5 w-5',
                ],
            ],
        ],
        'iconpicker' => [
            'opener' => 'w-12 h-12 flex justify-center items-center text-primary-600 bg-primary-50 hover:bg-primary-100 rounded-full',
            'window' => 'p-4 rounded-lg shadow-md bg-white absolute top-full left-0 w-[15.5rem] h-[18.75rem] z-10 flex flex-col',
            'list' => 'text-slate-700 grid grid-cols-[1.5rem,1.5rem,1.5rem,1.5rem,1.5rem] overflow-y-scroll gap-y-5 justify-between',
            'icon' => 'hover:text-slate-900',
        ],
    ],

    'fields' => [
        'label_right_frame' => 'sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5',
        'spacings' => 'mt-1',
        'input_icon' => 'absolute top-1/2 right-3 -translate-y-1/2',
        'textarea_icon' => 'absolute top-2 right-6',
    ],

    'badges' => [
        'base' => 'inline-flex items-center font-medium ring-1 ring-inset gap-1.5',
        'dot' => 'w-1.5 h-1.5 rounded-full',
        'types' => [
            'pill_color' => 'rounded-2xl',
            'pill_outline' => 'rounded-2xl',
            'badge_color' => 'rounded-md',
            'badge_modern' => 'rounded-md',
        ],
        'sizes' => [
            'sm' => 'px-2 py-1 text-xs',
            'md' => 'px-2.5 py-1 text-sm',
            'lg' => 'px-3 py-1.5 text-sm',
        ],
        'colors' => [
            'gray' => [
                'default' => 'bg-gray-50 text-gray-700 ring-gray-200',
                'dot' => 'bg-gray-500',
            ],
            'purple' => [
                'default' => 'bg-purple-50 text-purple-700 ring-purple-200',
                'dot' => 'bg-purple-500',
            ],
            'blue' => [
                'default' => 'bg-blue-50 text-blue-700 ring-blue-200',
                'dot' => 'bg-blue-500',
            ],
            'pink' => [
                'default' => 'bg-pink-50 text-pink-700 ring-pink-200',
                'dot' => 'bg-pink-500',
            ],
            'orange' => [
                'default' => 'bg-orange-50 text-orange-700 ring-orange-200',
                'dot' => 'bg-orange-500',
            ],
            'brand' => [
                'default' => 'bg-brand-50 text-brand-700 ring-brand-200',
                'dot' => 'bg-brand-500',
            ],
            'error' => [
                'default' => 'bg-error-50 text-error-700 ring-error-200',
                'dot' => 'bg-error-500',
            ],
            'success' => [
                'default' => 'bg-success-50 text-success-700 ring-success-200',
                'dot' => 'bg-success-500',
            ],
            'warning' => [
                'default' => 'bg-warning-50 text-warning-700 ring-warning-200',
                'dot' => 'bg-warning-500',
            ],
        ],
    ],

    'drop_down' => [
        'button' => 'p-2 hover:bg-slate-50 rounded-lg text-slate-600',
        'icon' => 'w-5 h-5',
        'menu' => [
            'wrapper' => 'absolute top-full right-0 bg-white shadow-md rounded-lg overflow-hidden z-10 min-w-60',
            'item' => 'w-full text-left whitespace-nowrap py-3 px-4 hover:bg-gray-50 flex items-center gap-2 cursor-pointer text-gray-700 hover:text-gray-700 font-medium',
            'icon' => 'w-4 h-4 text-gray-500',
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

    'tabs' => [
        'frame' => [
            'desktop' => 'border-slate-200 hidden md:block',
            'mobile' => 'md:hidden',
            'horizontal' => 'border-b',
            'vertical' => '',
        ],
        'wrapper' => [
            'default' => 'font-medium text-gray-500 flex',
            'horizontal' => '-mb-px space-x-4',
            'vertical' => 'flex-col space-y-4',
        ],
        'item' => [
            'default' => 'font-semibold cursor-pointer whitespace-nowrap pb-3 px-1 flex justify-center items-center gap-2',
            'active' => [
                'on' => [
                    'horizontal' => 'border-b-2 border-brand-700 text-brand-700',
                    'vertical' => 'border-l-2 border-brand-700 text-brand-700',
                ],
                'off' => [
                    'horizontal' => 'hover:border-brand-700 hover:text-brand-700',
                    'vertical' => 'hover:border-brand-700 hover:text-brand-700',
                ],
            ],
            'disabled' => [
                'on' => 'pointer-events-none !border-none !text-slate-400',
            ],
            'sizes' => [
                'sm' => 'text-sm',
                'md' => 'text-base',
            ],
        ],
    ],

    'modals' => [
        'frame' => 'fixed inset-0 z-50 p-4',
        'background' => 'absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity',
        'window' => 'fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 overflow-x-hidden rounded-lg bg-white shadow-md transition-all relative z-10 min-w-60 max-w-full max-h-full',
    ],

    'notifications' => [
        'default' => [
            'wrapper' => 'absolute top-0 inset-x-2 flex gap-4 z-50 rounded-xl py-4 pl-4 pr-12 border border-gray-300',
            'title' => 'text-gray-700 font-semibold',
            'message' => 'text-gray-600',
        ],
        'content' => 'flex-1 flex flex-col gap-1 text-sm',
        'bubble' => [
            'wrapper' => 'flex items-center space-x-2 rounded-lg ring-1 py-2 px-3',
            'message' => 'flex-1 font-medium ',
        ],
        'color' => [
            'success' => [
                'wrapper' => 'bg-success-25',
            ],
            'error' => [
                'wrapper' => 'bg-error-25',
            ],
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
