require 'spec_helper'

describe "homepage/about.html.erb" do
  it "should have right contents and links" do
    visit '/about'
    page.should have_content('About Me')
    page.should have_link('Home')
    page.should have_link('Projects')
    page.should have_link('Blog')
    page.should have_link('Teaching')
  end
end
