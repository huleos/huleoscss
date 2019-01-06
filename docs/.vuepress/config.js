module.exports = {
  title: 'huleos.css',
  description: 'HuleosCss',
  head: [
    [ 'link', 
      { rel: 'stylesheet', href: 'https://unpkg.com/huleos.css@0.1.0/dist/huleos.css' }
    ]
  ],
  themeConfig: {
    docsDir: 'docs',
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Docs', link: '/docs/' },
      { text: 'About Me', link: 'https://huleos.com' }
    ],
    sidebar: {
    	'/docs/': [
    		'',
        'objects',
        'components',
        'tools',
    		'utilities',
    	]
    }
  }
}