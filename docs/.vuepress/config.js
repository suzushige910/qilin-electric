import { defineUserConfig } from 'vuepress'
import { defaultTheme } from '@vuepress/theme-default'
import { viteBundler } from '@vuepress/bundler-vite'

export default defineUserConfig({
  // サイトの基本設定
  lang: 'ja-JP',
  title: 'qilin-electric',
  description: 'Just playing around',

  // GitHub Pagesのベースパス
  // リポジトリ名が 'my-repo' の場合は '/my-repo/'
  base: '/qilin-electric/',

  // テーマ設定
  theme: defaultTheme({
    navbar: [
      { text: 'ホーム', link: '/' },
      { text: 'ガイド', link: '/guide/' },
    ],
  }),

  // ビルダー設定
  bundler: viteBundler(),
})