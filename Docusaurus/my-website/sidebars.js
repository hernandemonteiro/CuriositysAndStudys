/**
 * Creating a sidebar enables you to:
 - create an ordered group of docs
 - render a sidebar for each doc of that group
 - provide next/previous navigation

 The sidebars can be generated from the filesystem, or explicitly defined here.

 Create as many sidebars as you want.
 */

// @ts-check

/** @type {import('@docusaurus/plugin-content-docs').SidebarsConfig} */
const sidebars = {
  // But you can create a sidebar manually

  tutorialSidebar: [
    {
      type: "html",
      value: "<hr>",
    },
    {
      type: "link",
      label: "ACESS THE PROJECT! ",
      href: "https://hernandemonteiro.vercel.app",
    },
    {
      type: "html",
      value: "<hr>",
    },
    {
      type: "category",
      label: "API",
      // items: ["api/index", "api/articles", "api/ownerInfo", "api/skills"],
      items: ["api/index", "api/articles"],

    },
    {
      type: "category",
      label: "DOCS",
      items: ["index"],
    },
    {
      type: "category",
      label: "COMUNITY",
      items: ["comunity/contributing"],
    },
  ],
};

module.exports = sidebars;
