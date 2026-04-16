const { defineConfig } = require('@playwright/test');

module.exports = defineConfig({
  testDir: 'tests',
  timeout: 30000,
  expect: {
    toHaveScreenshot: { maxDiffPixelRatio: 0.01 }
  },
  use: {
    headless: true,
    baseURL: process.env.BASE_URL || 'http://localhost',
    trace: 'on-first-retry',
  },
});
